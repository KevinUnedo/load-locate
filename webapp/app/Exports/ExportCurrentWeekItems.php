<?php

namespace App\Exports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Carbon\Carbon;

class ExportCurrentWeekItems implements FromCollection, WithHeadings
{
    public function title(): string
    {
        return 'This Week Items'; // Custom sheet name for found items
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Date',
            'Category',
            'Location',
            'More Information',
            'Claimed',
        ];
    }

    public function collection()
    {
        $today = Carbon::today();
        $startDate = $today->copy()->subDays(6); // Create a copy and then subtract 6 days

        $items = Item::whereBetween('date', [$startDate, $today])
            ->orderBy('date', 'DESC')
            ->get();


        // Create a custom collection with the selected columns
        $customCollection = $items->map(function ($item) {
            return [
                'ID' => $item->id,
                // 'User ID' => $item->user_id,
                'Name' => $item->name,
                'Date' => $item->date,
                'Category' => $item->category,
                'Location' => $item->location,
                'More Information' => $item->more_information,
                'Information' => $item->information ? 'Found Item' : 'Lost item',
                'Claimed' => $item->is_claimed ? 'Already Claimed' : 'Not Claimed yet',
            ];
        });

        return $customCollection;
    }
}

<?php

namespace App\Exports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Carbon\Carbon;

class ExportThisMonthItem implements FromCollection, WithHeadings
{
    public function title(): string
    {
        return 'This Month Items'; // Custom sheet name for found items
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
        $startOfMonth = $today->copy()->startOfMonth();
        $endOfMonth = $today->copy()->endOfMonth();

        $items = Item::whereBetween('date', [$startOfMonth, $endOfMonth])
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

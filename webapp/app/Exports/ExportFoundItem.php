<?php

namespace App\Exports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;

class ExportFoundItem implements FromCollection, WithHeadings, WithTitle
{
    public function title(): string
    {
        return 'Found Items'; // Custom sheet name for found items
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
            'Claimed'
        ];
    }

    public function collection()
    {
        $items = Item::where('information', true)
            ->orderBy('date', 'DESC') // Sort by date in ascending order
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
                'Claimed' => $item->is_claimed ? 'Already Claimed' : 'Not Claimed yet',
            ];
        });

        return $customCollection;
    }
}

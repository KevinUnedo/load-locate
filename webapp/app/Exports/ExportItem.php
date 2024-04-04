<?php

namespace App\Exports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;


class ExportItem implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            new ExportLostItem(),
            new ExportFoundItem(),
        ];
    }
}

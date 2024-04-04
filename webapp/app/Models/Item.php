<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getLinks(): array
    {
        $baseUri = '/api/items/' . $this->id;
        return [
            'self' => [
                'href' => $baseUri,
                'method' => 'GET',
                'type' => 'application/json',
                'description' => 'Get this item'
            ],
        ];
    }

    public static function getItemById($id)
    {
        return self::find($id);
    }
}

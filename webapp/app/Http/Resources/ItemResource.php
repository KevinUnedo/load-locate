<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'date' => $this->date,
            'category' => $this->category,
            'location' => $this->location,
            'more_information' => $this->more_information,
            'claimed' => $this->is_claimed ? 'Yes' : 'No',
            'links' => [
                'self' => route('items.show', ['item' => $this->id]),
            ],
        ];
    }
}

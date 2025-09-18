<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "is_weapon" => $this->is_weapon,
            "amount" => $this->amount,
            "energy_up" => $this->energy_up,
            "energy_cost" => $this->energy_cost,
            "cool_time" => $this->cool_time,
            "text" => $this->text,
            "price" => $this->price,
        ];
    }
}

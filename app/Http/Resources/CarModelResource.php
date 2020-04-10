<?php

namespace App\Http\Resources;

use App\Enums\CarType;
use App\Enums\FuelType;
use App\Enums\GearType;
use Illuminate\Http\Resources\Json\JsonResource;

class CarModelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'type' => $this->car_type->description,
            'fuel' => $this->fuel_type->description,
            'gear' => $this->gear->description,
            'number_of_seats' => $this->number_of_seats,
            'power' => $this->power,
        ];
    }
}

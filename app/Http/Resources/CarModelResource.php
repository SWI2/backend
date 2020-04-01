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
            'type' => CarType::coerce($this->car_type)->description,
            'fuel' => FuelType::coerce($this->fuel_type)->description,
            'gear' => GearType::coerce($this->gear)->description,
            'number_of_seats' => $this->number_of_seats,
            'power' => $this->power,
        ];
    }
}

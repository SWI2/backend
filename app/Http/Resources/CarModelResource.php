<?php

namespace App\Http\Resources;

use App\Enums\CarType;
use App\Enums\FuelType;
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
        //return parent::toArray($request);
        return [
            'name' => $this->name,
            //'type' => CarType::coerce($this->car_type)->description,
            //'fuel' => FuelType::coerce($this->fuel_type)->description,
            'gear' => $this->gear,
            'number_of_seats' => $this->number_of_seats,
            'power' => $this->power,
        ];
    }
}

<?php

namespace App\Http\Resources;

use App\CarModel;
use App\Enums\CarState;
use App\Car;
use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            "pricing_per_day" => $this->pricing_per_day,
            //"model" => new CarModelResource(CarModel::find()) $this->car_model_id->model,
        ];
    }
}

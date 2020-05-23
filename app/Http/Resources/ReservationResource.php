<?php

namespace App\Http\Resources;

use App\Http\Resources\CarResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ReservationResource extends JsonResource
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
            'state' => $this->state,
            'customer' => $this->customer,
            'rent_date' => $this->rent_date->format('c'),
            'return_date' => $this->return_date->format('c'),
            'car' => new CarResource($this->car),
            'files' => $this->files
        ];
    }
}

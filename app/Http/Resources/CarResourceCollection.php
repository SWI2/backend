<?php

namespace App\Http\Resources;

use App\Enums\CarState;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CarResourceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}

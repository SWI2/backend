<?php

namespace App\Http\Resources;

use App\CarModel;
use App\Enums\CarState;
use App\Car;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

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
        $thumbnail = DB::table('images')->select('url')->where('car_id', $this->id)->where('is_thumbnail', true)->value('url');

        return [
            'id' => $this->id,
            'pricing_per_day' => $this->pricing_per_day,
            'thumbnail_url' => $thumbnail,
            'state' => 0,
            'model' => new CarModelResource(CarModel::findOrFail($this->car_model_id)),
        ];
    }
}

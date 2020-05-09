<?php

namespace App;

use App\Enums\CarType;
use App\Enums\FuelType;
use App\Enums\GearType;
use BenSampo\Enum\Traits\CastsEnums;

class CarModel extends BaseModel
{
    use CastsEnums;
    protected $fillable = [
        'name',
        'fuel_type',
        'gear',
        'number_of_seats',
        'car_type',
        'power'
    ];


    protected $enumCasts = [
        'car_type' => CarType::class,
        'fuel_type' => FuelType::class,
        'gear' => GearType::class,
    ];

    protected $casts = [
        'car_type' => 'int',
        'fuel_type' => 'int',
        'gear' => 'int',
    ];


    public function car()
    {
        return $this->hasMany('App\Car');
    }
}

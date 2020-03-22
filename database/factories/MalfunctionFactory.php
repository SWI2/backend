<?php

use Faker\Generator as Faker;
use App\Malfunction;
use App\Car;
use App\Enums\MalfunctionState;

$factory->define(Malfunction::class, function (Faker $faker) {
    return [
        'car_id' => $faker->randomElement(Car::all()->pluck('id')->toArray()),
        'state' => $faker->randomElement(MalfunctionState::toArray()),
        'short_description' => 'Short description',
        'description' => 'Description may be long',
        'total_cost' => $faker->randomFloat(1, 100, 30000),
        'discovery_date' => $faker->date(),
        'last_update_date' => $faker->date(),
        'repair_date' => $faker->date()
    ];
});

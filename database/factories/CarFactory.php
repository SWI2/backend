<?php

use Faker\Generator as Faker;
use \App\Car;
use \App\CarModel;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'car_model_id' => $faker->randomElement(CarModel::all()->pluck('id')->toArray()),
        'driven_kilometer' => $faker->numberBetween(0, 999999),
        'production_year' => $faker->year($max = 'now'),
        'pricing_per_day' => $faker->randomNumber(4)
    ];
});

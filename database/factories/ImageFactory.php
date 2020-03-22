<?php

use Faker\Generator as Faker;
use App\Image;
use App\Car;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'car_id' => $faker->randomElement(Car::all()->pluck('id')->toArray()),
        'url' => $faker->imageUrl(640, 480, 'cats'),
        'is_thumbnail' => $faker->boolean($chanceOfGettingTrue = 50)
    ];
});

<?php

use Faker\Generator as Faker;
use App\File;
use App\User;
use App\Reservation;
use App\Malfunction;

$factory->define(File::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement(User::all()->pluck('id')->toArray()),
        'reservation_id' => $faker->randomElement(Reservation::all()->pluck('id')->toArray()),
        'malfunction_id' => $faker->randomElement(Malfunction::all()->pluck('id')->toArray()),
        'name' => $faker->word(),
        'url' => 'http://www.africau.edu/images/default/sample.pdf'
    ];
});

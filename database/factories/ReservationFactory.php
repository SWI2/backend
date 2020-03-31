<?php

use Faker\Generator as Faker;
use App\Reservation;
use App\Customer;
use App\User;
use App\Car;
use App\Enums\ReservationState;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'customer_id' => $faker->randomElement(Customer::all()->pluck('id')->toArray()),
        'renter_id' => $faker->randomElement(User::all()->pluck('id')->toArray()),
        'returner_id' => $faker->randomElement(User::all()->pluck('id')->toArray()),
        'car_id' => $faker->randomElement(Car::all()->pluck('id')->toArray()),
        'state' => $faker->randomElement(ReservationState::toArray()),
        'note' => $faker->text(20),
        'rent_date' => $faker->date(),
        'return_date' => $faker->date()
    ];
});

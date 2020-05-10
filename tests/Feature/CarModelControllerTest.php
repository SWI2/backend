<?php

namespace Tests\Feature;

use Tests\SeededTest;
use App\User;
use Laravel\Passport\Passport;
use App\CarModel;
use App\Enums\UserType;

class CarModelControllerTest extends SeededTest
{
    
    /** @test*/
    public function basic_test()
    {
        $this->withoutExceptionHandling();

        Passport::actingAs(
            User::find(1),
            [UserType::Admin()->key]
        );

        $response = $this->post('api/cars/models', [
            'name' => 'Test',
            'car_type' => 0,
            'fuel_type' => 0,
            'gear' => 1,
            'number_of_seats' => 5,
            'power' => 9001
        ]);

        $response->assertStatus(201);
    }
}

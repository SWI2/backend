<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use Laravel\Passport\Passport;
use App\CarModel;
use App\Enums\UserType;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /** @test*/
    public function basic_test()
    {
        $this->withoutExceptionHandling();

        Passport::actingAs(
            $this->createMockUser(),
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
        $this->assertCount(1, CarModel::all());
    }

    private function createMockUser() 
    {
        $user = new User();

        $user->name = 'User';
        $user->email = 'user@example.com';
        $password = bcrypt('123456');
        $user->password = $password;
        $user->type = UserType::Admin()->value;

        $user->save();

        return $user;
    }
}

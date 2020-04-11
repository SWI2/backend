<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\CarModel;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /** @test*/
    public function basic_test()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('api/cars/models', [
            'name' => 'Test',
            'car_type' => 0,
            'fuel_type' => 0,
            'gear' => 1,
            'number_of_seats' => 5,
            'power' => 9001
        ]);
        
        $this->assertTrue(true);

        $response->assertStatus(201);
        $this->assertCount(1, CarModel::all());
    }
}

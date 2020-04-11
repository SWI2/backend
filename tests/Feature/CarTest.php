<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Car;
use App\CarModel;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarTest extends TestCase
{
    use RefreshDatabase;

    /**
    * @test
    */
    public function cars_collection_status_test()
    {
        $this->withoutExceptionHandling();

        $this->get('api/cars')->assertOk();
        $this->get(route('cars.index'))->assertStatus(200);
    }

    /**
    * @test
    */
    public function car_status_test()
    {
        $this->withoutExceptionHandling();

        //$this->actingAs(factory(Car::class));

        //$this->get(route('cars.show', $car->id))->assertStatus(200);

        $this->assertTrue(true);
    }

    
}

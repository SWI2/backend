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

    public function setup()
    {
        parent::setup();
        $carModelsFakeData = [
            ['id' => 1, 'name' => 'Tesla Model S P90', 'fuel_type' => 3, 'gear' => 1, 'number_of_seats' => 5, 'car_type' => 0, 'power' => 310],
        ];
        CarModel::insert($carModelsFakeData);
        factory(Car::class, 20)->create();
    }

    /**
    * @test
    */
    public function cars_collection_status_test()
    {
        $this->withoutExceptionHandling();

        $this->get('api/cars')->assertOk();
    }

    /**
    * @test
    */
    public function get_car_detail_sucess()
    {
        $this->withoutExceptionHandling();

        $this->get('api/cars/1')->assertOk();
    }

    /**
    * @test
    */
    public function get_car_detail_error()
    {
        $this->withoutExceptionHandling();

        $this->get('api/cars/200')->assertNotFound();
    }
}

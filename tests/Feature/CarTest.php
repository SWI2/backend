<?php

namespace Tests\Feature;

use Tests\SeededTest;
use App\Car;
use App\CarModel;

class CarTest extends SeededTest
{

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

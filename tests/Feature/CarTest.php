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
    }
}

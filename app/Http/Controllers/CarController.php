<?php

namespace App\Http\Controllers;

use App\Car;
use App\Http\Resources\CarResource;
use App\Http\Resources\CarResourceCollection;

/**
 * Class CarController
 * @package App\Http\Controllers
 */
class CarController extends Controller
{
    /**
     * @param Car $car
     * @return CarResource
     */
    public function show(Car $car): CarResource
    {
        return new CarResource($car);
    }

    /**
     * @return CarResourceCollection
     */
    public function index(): CarResourceCollection
    {
        return new CarResourceCollection(Car::all());
    }
}

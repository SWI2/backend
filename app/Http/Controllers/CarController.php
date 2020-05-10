<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
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
    public function show($carId)
    {
        $car = Car::find($carId);
        if ($car == null) {
            return response()->json(['message' => 'Car with id '.$carId.' not found.'], 404);
        } else {
            return new CarResource($car);
        }
    }

    /**
     * @return CarResourceCollection
     */
    public function index(): CarResourceCollection
    {
        return new CarResourceCollection(Car::all());
    }
}

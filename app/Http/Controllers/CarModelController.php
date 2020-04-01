<?php

namespace App\Http\Controllers;

use App\CarModel;
use App\Http\Resources\CarModelResource;
use App\Http\Resources\CarModelResourceCollection;

class CarModelController extends Controller
{

    public function show(CarModel $carModel): CarModelResource
    {
        return new CarModelResource($carModel);
    }

    /**
     * @return CarModelResourceCollection
     */
    public function index(): CarModelResourceCollection
    {
        return new CarModelResourceCollection(CarModel::all());
    }

    public function store(Request $request)
    {
        $carModel = new CarModel();

        $carModel->name = $request->name;
        $carModel->car_type = CarType::coerce($request->car_type)->value;
        $carModel->fuel_type = FuelType::coerce($request->fuel_type)->value;
        $carModel->gear = $request->gear;
        $carModel->number_of_seats = $request->number_of_seats;
        $carModel->power = $request->power;

        $carModel->save();
    }
}

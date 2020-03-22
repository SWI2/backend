<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarModel;
use App\Enums\FuelType;
use App\Enums\CarType;

class CarModelController extends Controller
{
    // TODO: - no validation
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

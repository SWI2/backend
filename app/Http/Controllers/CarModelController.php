<?php

namespace App\Http\Controllers;

use App\CarModel;
use App\Enums\CarType;
use App\Enums\FuelType;
use App\Enums\GearType;
use App\Http\Resources\CarModelResource;
use App\Http\Resources\CarModelResourceCollection;
use BenSampo\Enum\Rules\Enum;
use BenSampo\Enum\Rules\EnumKey;
use BenSampo\Enum\Rules\EnumValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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


        Log::channel('stderr')->info($request);
        $carModel = new CarModel();



        $carModel->name = $request->name;
        $carModel->car_type = $request->car_type;
        $carModel->fuel_type = $request->fuel_type;
        $carModel->gear = $request->gear;
        $carModel->number_of_seats = $request->number_of_seats;
        $carModel->power = $request->power;

        return new CarModelResource($carModel);
    }
}

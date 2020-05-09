<?php

namespace App\Http\Controllers;

use App\CarModel;
use App\Http\Resources\CarModelResource;
use App\Http\Resources\CarModelResourceCollection;
use Illuminate\Http\Request;

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

    /**
     * store new car model
     */
    public function store(Request $request)
    {
        $carModel = CarModel::create($request->all());
        return new CarModelResource($carModel);
    }
}

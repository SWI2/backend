<?php

use Illuminate\Http\Request;
use App\Enums\UserType;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/jwt', 'UserController@login');

// Cars

Route::get('/cars', 'CarController@index');
Route::get('/cars/{carId}', 'CarController@show');

// Administration

Route::middleware(['auth:api', 'usertype'])->group(function() {

    // Cars administration

    Route::middleware(['scope:'.UserType::Admin()->key])->post('/cars/models', 'CarModelController@store');
});

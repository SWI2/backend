<?php

use Illuminate\Http\Request;
use \App\Http\Controllers\CarController;

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

// Car models

Route::post('/cars/models', 'CarModelController@store');

// Cars

Route::get('/cars', 'CarController@index');
Route::get('/cars/{carId}', 'CarController@show');

// Administration

Route::middleware(['auth:api', 'usertype'])->group(function() {
    
});

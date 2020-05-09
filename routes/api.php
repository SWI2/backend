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
Route::apiResource('/cars/models', 'CarModelController');

// List all cars for customers
Route::apiResource('/cars', 'CarController');

// Test route

Route::get('/', function()
{
    return "Hello world!";
});

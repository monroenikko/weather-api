<?php

use App\Http\Controllers\API\LocationController;
use App\Http\Controllers\API\WeatherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'location'], function ($router) {
    $router->get('/', [LocationController::class, 'index']);
});

Route::group(['prefix' => 'weather'], function ($router) {
    $router->get('/', [WeatherController::class, 'index']);
});

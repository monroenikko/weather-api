<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Services\WeatherService;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function __construct(protected WeatherService $service)
    {
    }

    public function index(Request $request)
    {
        return $this->service->getWeather($request->all());
    }
}

<?php

namespace App\Http\Interfaces;

interface WeatherInterface
{
    public function getWeather(mixed $data);
}

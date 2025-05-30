<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\WeatherInterface;
use Illuminate\Support\Facades\Http;

class WeatherRepository implements WeatherInterface
{
    public function getWeather(mixed $data)
    {
        $res = Http::get(config('openweather.api.url'), [
            'lon' => $data['lon'],
            'lat' => $data['lat'],
            'apiKey' => config('openweather.api.key'),
            'units' => 'metric',
        ]);

        return json_decode($res);
    }
}

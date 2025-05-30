<?php

namespace App\Http\Services;

use App\Http\Interfaces\WeatherInterface;
use Exception;
use Illuminate\Validation\ValidationException;

class WeatherService
{
    public function __construct(protected WeatherInterface $repository)
    {
    }

    public function getWeather($data)
    {
        try {
            $res = $this->repository->getWeather($data);

            return response()->json($res);
        } catch (Exception $e) {
            dd($e);
            throw ValidationException::withMessages(['Something went wrong!']);
        }
    }
}

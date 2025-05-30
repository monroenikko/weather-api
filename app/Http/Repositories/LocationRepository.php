<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\LocationInterface;
use Illuminate\Support\Facades\Http;

class LocationRepository implements LocationInterface
{
    public function getLocation(mixed $data)
    {
        $res = Http::get(config('geoapi.api.url'), [
            'text' => $data['text'],
            'apiKey' => config('geoapi.api.key'),
        ]);

        return json_decode($res);
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Services\LocationService;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function __construct(protected LocationService $service)
    {
    }

    public function index(Request $request)
    {
        return $this->service->getLocation($request->all());
    }
}

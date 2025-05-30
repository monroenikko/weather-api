<?php

namespace App\Http\Services;

use App\Http\Interfaces\LocationInterface;
use Exception;
use Illuminate\Validation\ValidationException;

class LocationService
{
    public function __construct(protected LocationInterface $repository)
    {
    }

    public function getLocation($data)
    {
        try {
            $res = $this->repository->getLocation($data);

            return response()->json($res);
        } catch (Exception $e) {
            dd($e);
            throw ValidationException::withMessages(['Something went wrong!']);
        }
    }
}

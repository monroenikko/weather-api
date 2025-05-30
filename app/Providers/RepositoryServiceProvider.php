<?php

namespace App\Providers;

use App\Http\Interfaces\LocationInterface;
use App\Http\Interfaces\WeatherInterface;
use App\Http\Repositories\LocationRepository;
use App\Http\Repositories\WeatherRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(LocationInterface::class, LocationRepository::class);
        $this->app->bind(WeatherInterface::class, WeatherRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

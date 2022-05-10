<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\WeatherRepositoryInterface;
use App\Repositories\WeatherRepository;

class RepositoryServiceProvider extends ServiceProvider
{
 
    public function register()
    {
        $this->app->bind(WeatherRepositoryInterface::class, WeatherRepository::class);
    }

    public function boot()
    {
        //
    }
}

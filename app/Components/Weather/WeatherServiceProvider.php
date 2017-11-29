<?php

namespace App\Components\Weather;

use App\Components\Weather\Contracts\IWeatherFetcher;
use App\Components\Weather\Repositories\EloquentWeatherRepository;
use App\Components\Weather\Services\APXUWeatherService;
use App\Components\Weather\Services\TwitterWeatherService;
use Illuminate\Support\ServiceProvider;

class WeatherServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(dirname(__FILE__).'/Views','weather');
        $this->loadMigrationsFrom(dirname(__FILE__).'/Database/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IWeatherFetcher::class,EloquentWeatherRepository::class);
    }
}

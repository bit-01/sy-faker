<?php

namespace Bit\ArabFaker;

use Illuminate\Support\ServiceProvider;

class ArabFakerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/syrian-faker.php', 'syrian-faker');
        $this->app->singleton('syrian-faker', function () {
            return new SyrianFaker();
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/syrian-faker.php' => config_path('syrian-faker.php'),
            ], 'config');
        }
    }
}

<?php

namespace Bit\ArabFaker;

use Illuminate\Support\ServiceProvider;

class ArabFakerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/arab-faker.php', 'arab-faker');
        $this->app->singleton('arab-faker', function () {
            return new ArabFaker();
        });
    }

    public function boot()
    {

    }
}

<?php

namespace Bit\SyFaker;

use Illuminate\Support\ServiceProvider;

class SyFakerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/sy-faker.php', 'sy-faker');
        $this->app->singleton('sy-faker', function () {
            return new SyFaker();
        });
    }

    public function boot()
    {

    }
}

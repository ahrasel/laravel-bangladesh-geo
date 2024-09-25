<?php

namespace YourVendor\BangladeshGeo;

use Illuminate\Support\ServiceProvider;

class BangladeshGeoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->commands([
            // You can register console commands if needed
        ]);
    }

    public function register()
    {
        $this->app->singleton('DivisionsSeeder', function ($app) {
            return new \Ahrasel\BangladeshGeo\database\seeders\DivisionsSeeder();
        });
    }
}

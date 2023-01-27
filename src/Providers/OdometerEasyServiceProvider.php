<?php

namespace Gsferro\OdometerEasy\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class OdometerEasyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . "/../resources/views/components", "odometer-easy");
        $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/odometer-easy'),
        ], 'public');

        Blade::directive("OdometerEasyPlugin", function(){
            return "
                    <link href="{{ asset('vendor/odometer-easy/odometer/themes/odometer.css') }}" rel='stylesheet' type='text/css'/>
                    <script src="{{ asset('vendor/odometer-easy/odometer/odometer.js') }}"></script>
                    <script src="{{ asset('vendor/odometer-easy/odometer-easy.js') }}"></script>
            ";
        });

        Blade::component('componente.odometer-easy.odometer', 'odometer-easy');
    }
}

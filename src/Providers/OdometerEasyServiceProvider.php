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
        $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/odometer-easy'),
        ], 'public');

        $this->publishes([
            __DIR__.'/../resources/views/components' => resource_path('views/components/odometer-easy'),
        ], 'views');

        Blade::component('components.odometer-easy.odometer', 'odometer-easy');
        Blade::directive("OdometerEasyPlugin", function(){
            return "
                    <link href=". asset('vendor/odometer-easy/odometer/themes/odometer.css'). " rel='stylesheet' type='text/css'/>
                    <script src=" . asset('vendor/odometer-easy/odometer/odometer.js') . "></script>
                    <script src=" . asset('vendor/odometer-easy/odometer-easy.js') ."></script>
            ";
        });
    }
}

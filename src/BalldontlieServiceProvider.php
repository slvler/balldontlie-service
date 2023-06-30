<?php

namespace Slvler\BalldontlieLaravel;

use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

class BalldontlieServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/balldontlie.php' => config_path('balldontlie.php'),
            ], 'config');
        }
    }
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/balldontlie.php', 'balldontlie');

        $this->app->singleton('balldontlie', function (Container $app) {
            return new Balldontlie($app);
        });
    }

}

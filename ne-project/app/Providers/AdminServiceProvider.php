<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Connection::class, function (Application $app) {
            return new Connection($app['config']['admin']);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        return "hello";
    }
}

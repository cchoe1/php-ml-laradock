<?php

namespace App\Providers;

use Goutte\Client;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class GoutteScraper extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(Client::class, function(Application) {
            return new Client();
        });
    }
}

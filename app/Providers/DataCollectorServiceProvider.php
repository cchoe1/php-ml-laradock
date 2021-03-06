<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\DataCollectorService;
use Goutte\Client;
use App\Providers\GoutteScraper;

class DataCollectorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(GoutteScraper $scraper)
    {
        //
        $this->scraper = $scraper;
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->app->singleton(DataCollectorService::class, function() {
            return new DataCollectorService(new GoutteScraper);
        });
    }

    public function provides()
    {
        return [DataService::class];
    }
}

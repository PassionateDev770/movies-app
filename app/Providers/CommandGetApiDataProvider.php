<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CommandGetApiDataProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->commands([
            \App\Console\Commands\ApiData::class,
        ]);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Operations;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('operations', function () {
            return new Operations();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

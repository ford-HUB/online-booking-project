<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\ServiceProvider;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */

     /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot(): void
    {
        parent::boot();

        // Register role middleware
        Route::aliasMiddleware('role', \App\Http\Middleware\RoleMiddleware::class);
    }
}

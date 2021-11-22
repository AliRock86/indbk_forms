<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Providers\Sanctum;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Sanctum::ignoreMigrations;
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

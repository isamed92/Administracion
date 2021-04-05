<?php

namespace App\Providers;

use App\Models\Pais;
use App\Observers\PaisObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Pais::observe(PaisObserver::class);
    }
}

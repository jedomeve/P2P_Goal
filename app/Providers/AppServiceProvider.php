<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(200);

        $this->app->bind(
            'App\Payment\AuthInterface',
            'App\Payment\AuthRepository'
        );

        $this->app->bind(
            'App\Payment\PaymentInterface',
            'App\Payment\PaymentRepository'
        );
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(AfricasTalkingGateway::class,function(){
            return new AfricasTalkingGateway(env('SMS_USERNAME'),env('SMS_KEY'),env('SMS_ENVIRONMENT'));
        });
    }
}

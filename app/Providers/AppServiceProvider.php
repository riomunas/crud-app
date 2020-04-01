<?php

namespace App\Providers;

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
        
        $this->app->bind('App\Providers\Services\ProductService', 
            'App\Providers\Services\Implementations\ProductServiceImpl');
        
        $this->app->bind('App\Providers\Services\AuthService', 
            'App\Providers\Services\Implementations\AuthServiceImpl');
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

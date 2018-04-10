<?php

namespace App\Providers;

use App\Library\Services\AWS\S3ProductStorage;
use App\Library\Services\Store\SessionCart;
use Illuminate\Support\ServiceProvider;

class StoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Library\Contracts\ProductStorageInterface', function(){
            return new S3ProductStorage();
        });
        
        $this->app->bind('App\Library\Contracts\CartInterface', function(){
           return new SessionCart(); 
        });
    }
}

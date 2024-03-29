<?php

namespace App\Providers;

use App\Library\Services\Stripe\StripeAccountManager;
use App\Library\Services\Stripe\StripeCardManager;
use App\Library\Services\StripeCheckout;
use Illuminate\Support\ServiceProvider;

class AccountServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Library\Contracts\AccountCardInterface', function(){
            return new StripeCardManager(new StripeAccountManager());
        });
    }
}

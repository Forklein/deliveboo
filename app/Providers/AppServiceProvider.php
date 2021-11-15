<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Braintree\Gateway;


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
        $this->app->singleton(Gateway::class, function ($app) {
            return new Gateway([
                'environment' => 'sandbox',
                'merchantId' => 'txcvpmsq3bw8tg8j',
                'publicKey' => '7m53mx3v953t8nvz',
                'privateKey' => 'cb294c3d4eb0f9f29a166df04264f0ff'
            ]);
        });
    }
}

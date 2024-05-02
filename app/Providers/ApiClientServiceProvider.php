<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class ApiClientServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Client::class, function () {
            return new Client([
                'base_uri' => 'https://api.blogspot.com',
                'headers' => ['Authorization' => 'Bearer ' . config('api.credentials')]
            ]);
        });
    }
}

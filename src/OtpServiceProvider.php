<?php

namespace Ichtrojan\Otp;

use Illuminate\Support\ServiceProvider;

class OtpServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('otp', function () {
            return new \Ichtrojan\Otp\Otp;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->commands([
            \Ichtrojan\Otp\Commands\CleanOtps::class,
        ]);
    }
}

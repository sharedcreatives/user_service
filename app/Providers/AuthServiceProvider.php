<?php
namespace App\Providers;

use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }
    /**
     * Bootstrap any application services
     * 
     * 
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
    }
}


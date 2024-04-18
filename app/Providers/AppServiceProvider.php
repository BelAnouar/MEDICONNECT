<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('manage_admin', function (User $user) {

            return $user->role == "admin";
        });
        Gate::define('manage_doctor', function (User $user) {

            return $user->role == "doctor";
        });
        Gate::define('manage_patient', function (User $user) {

            return $user->role == "patient";
        });
    }
}

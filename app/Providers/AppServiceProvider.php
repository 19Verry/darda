<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
        Gate::define('mudir', function (User $user) {
            return $user->role === 'mudir';
        });
        Gate::define('wakil_mudir', function (User $user) {
            return $user->role === 'wakil_mudir';
        });
        Gate::define('kabid_kurikulum', function (User $user) {
            return $user->role === 'kabid_kurikulum';
        });
        Gate::define('kabid_tahfidz', function (User $user) {
            return $user->role === 'kabid_tahfidz';
        });
        Gate::define('kabid_kesantrian', function (User $user) {
            return $user->role === 'kabid_kesantrian';
        });
        Gate::define('tu', function (User $user) {
            return $user->role === 'tu';
        });
    }
}
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Store;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Policies\StorePolicy;

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
        Gate::policy(Store::class, StorePolicy::class);
    }
}

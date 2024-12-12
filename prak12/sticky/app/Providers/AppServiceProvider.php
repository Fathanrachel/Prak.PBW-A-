<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Store;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Policies\StorePolicy;
use Illuminate\Pagination\Paginator;

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
        Gate::define('isPartner', fn (User $user) => $user->isAdmin() || $user->isPartner());

        \Illuminate\Database\Eloquent\Model::preventLazyLoading(!app()->isProduction());
    }
}

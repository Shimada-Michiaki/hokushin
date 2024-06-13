<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // 権限を定義
        Gate::define('view-製造', function ($user) {
            return $user->hasRole('製造');
        });

        Gate::define('view-出荷', function ($user) {
            return $user->hasRole('出荷');
        });

        Gate::define('view-外注', function ($user) {
            return $user->hasRole('外注');
        });

        Gate::define('view-any', function ($user) {
            return $user->hasAnyRole(['社内管理者', '事務員', 'アプリ保守管理者']);
        });
    }
}

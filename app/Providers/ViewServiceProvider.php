<?php

namespace App\Providers;

use App\Models\Agent;
use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('components.layouts.admin-cms', function ($view) {

            $counts = Cache::remember('admin_sidebar_counts', 60, function () {
                return [
                    'agents' => Agent::count(),
                    'users' => User::count(),
                ];
            });

            $view->with('sidebarCounts', $counts);
        });
    }
}

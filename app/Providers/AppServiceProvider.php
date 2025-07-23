<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Blade;

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
        if (!app()->environment('local')) {
            URL::forceScheme('https');
        }

        if (app()->environment('local') && str_contains(request()->getHost(), 'ngrok-free.app')) {
            URL::forceScheme('https');
        }

        if (app()->environment('local') && str_contains(request()->getHost(), 'trycloudflare')) {
            URL::forceScheme('https');
        }

        if (app()->environment('local') && str_contains(request()->getHost(), 'onrender')) {
            URL::forceScheme('https');
        }

        Blade::directive('navactive', function ($routeName) {
            return "<?php echo request()->routeIs($routeName) ? 'active' : ''; ?>";
        });
    }

}

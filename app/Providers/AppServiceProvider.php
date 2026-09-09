<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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
        // Force HTTPS for all asset(), route(), and url() helpers in production or behind HTTPS proxy
        if ($this->app->environment('production') || env('APP_ENV') === 'production' || str_contains(request()->header('x-forwarded-proto', ''), 'https') || request()->isSecure()) {
            URL::forceScheme('https');
        }
    }
}

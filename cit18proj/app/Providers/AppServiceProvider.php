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
        if (env('CODESPACES') || request()->server('HTTP_X_FORWARDED_PROTO') === 'https') {
            URL::forceScheme('https');
        }
        if (env('APP_ENV') !== 'local') {
            URL::forceRootUrl(env('APP_URL', 'https://fictional-invention-wrg7jgwjx9jqc5gp7-8001.app.github.dev'));
        }
    }
}

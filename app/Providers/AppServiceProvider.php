<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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
        // Atrás do proxy da Vercel a requisição chega como HTTP; sem isso,
        // asset()/@vite geram URLs http:// e o navegador bloqueia o CSS.
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}

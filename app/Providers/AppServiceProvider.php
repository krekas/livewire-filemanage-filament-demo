<?php

namespace App\Providers;

use Filament\Support\Assets\Js;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentAsset;

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
        FilamentAsset::register([
            Js::make('alpine-ui', 'https://unpkg.com/@alpinejs/ui@3.13.3-beta.1/dist/cdn.min.js'),
        ]);
    }
}

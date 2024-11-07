<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Helpers\FruitHelper;

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
        // View composer untuk semua halaman yang menggunakan layout app.blade.php
        View::composer('layouts.app', function ($view) {
            $view->with('randomFruit', FruitHelper::getRandomFruit());
        });
    }
}

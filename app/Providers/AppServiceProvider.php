<?php

namespace App\Providers;

use App\Models\About;
use App\Models\BgImage;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // View::share('settings', Setting::first());
        // View::share('categories', Category::select('id', 'title')
        //     ->where('top', 1)
        //     ->latest()
        //     ->take(5)
        //     ->get());

    }
}

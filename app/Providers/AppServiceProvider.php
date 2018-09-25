<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $categories=\App\Category::all();
        view()->composer('index',function ($view) use ($categories){
            $view->with('categories', $categories);
        });
        view()->composer('sections.nav',function ($view) use ($categories){
            $view->with('categories', $categories);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Category;

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
        $categories=Category::all();
        //skip 5 and take all 
        $count = $categories->count();
        $skip = 5;
        $limit = $count - $skip; // the limit
        $residual = Category::skip($skip)->take($limit)->get();
        view()->composer('index',function ($view) use ($categories,$residual){
            $view->with('categories', $categories)->with('residual',$residual);
        });
        view()->composer('sections.nav',function ($view) use ($categories,$residual){
            $view->with('categories', $categories)->with('residual',$residual);
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

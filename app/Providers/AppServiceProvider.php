<?php

namespace App\Providers;

use App\ProductType;
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
        view()->composer('leftmenu',function($view){
            $category = ProductType::all();
            $view->with('category',$category);

            Schema::defaultStringLength(191);
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
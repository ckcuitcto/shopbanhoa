<?php

namespace App\Providers;

use App\ProductType;
use App\Product;
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

        view()->composer('menutop',function($view){

//            if(empty(Auth::user()->id))
//            {
//
//                $view->with('productListJson',);
//
//                Schema::defaultStringLength(191);
//            }


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

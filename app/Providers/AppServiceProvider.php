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

        view()->composer('menu',function($view){
            $productList = Product::all();
            foreach ($productList as $product) {

                $jsonArray[] = array('id' => $product->id,'name' => $product->name);
            }
            $productListJson = json_encode($jsonArray);

            $view->with('productListJson',$productListJson);

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

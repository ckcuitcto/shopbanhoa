<?php

namespace App\Providers;

use App\ProductType;
use App\Product;
use App\Contacts;
use App\Footer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $phoneNumber = Contacts::first(); 
        $phoneNumber = $phoneNumber->phone_number;
        View::share('phoneNumber', $phoneNumber);

        $titleHeader = Footer::first();
        $titleHeader = $titleHeader->titleHeader;
        View::share('titleHeader',$titleHeader);

        view()->composer('leftmenu',function($view){
            $category = ProductType::all();
            $view->with('category',$category);

            Schema::defaultStringLength(191);
        });

        view()->composer('footer',function($view){
            $data = Footer::first();

            $account = explode("+", $data->account);
            $info =  explode("+", $data->inform);
            $source =  explode("+", $data->source);
            $description = $data->description;
            $view->with(['account' => $account,'info' => $info,'source' => $source,'description' => $description]);

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

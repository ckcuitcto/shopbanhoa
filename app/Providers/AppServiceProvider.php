<?php

namespace App\Providers;

use App\ProductType;
use App\Product;
use App\Contacts;
use App\Footer;
use Illuminate\Support\Facades\DB;
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

        view()->composer(['leftmenu','pages.products'],function($view){
//            $category = ProductType::all();

            $category = DB::select("select tp.*,count(p.id) as total from type_products tp
                    LEFT JOIN products p ON tp.id = p.id_type
                    where p.new = 1
                    group by tp.id
                    ");
//                        $category = DB::table('type_product')
//                ->join('products', 'products.id_type', '=', 'type_product.id')
//                ->select(DB::raw('COUNT(products.id) as total'), 'type_product.*')
//                ->where([
//                    ['bills.confirm', '1'],
//                    ['new', '1']
//                ])
//                ->groupBy('type_product.id')
//                ->get();

            $randomProduct = Product::inRandomOrder()->where('new','1')->limit(2)->get();

            $view->with(['category' => $category, 'randomProduct' => $randomProduct]);

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

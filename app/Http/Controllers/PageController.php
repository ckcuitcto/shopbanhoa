<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $products = Product::where('new',1)->get();

        $featuredProducts = Product::where('view','>',0)->orderBy('view','desc')->limit(3)->get();
//        dd($products);
        return view('pages.homepage',compact('slide','products','featuredProducts'));
    }

    public function getProductType($idType){
        $productsByIdType =  Product::where('id_type',$idType)->paginate(6);
        return view('pages.productType',compact('productsByIdType'));
    }

    public function getProductDetail(Request $request){
        $product = Product::where('id',$request->idProduct)->first();
//        $breadcrumbs = DB::table
        $relatedProducts = Product::where('id_type',$product->id_type)->limit(3)->get();
        return view('pages.productDetails',compact('product','relatedProducts'));
    }

    public function getCart(){
        return view('pages.cart');
    }


}

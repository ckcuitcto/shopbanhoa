<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use App\ProductType;
use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $products = Product::where('new', 1)->get();

        $featuredProducts = Product::where('view', '>', 0)->orderBy('view', 'desc')->limit(3)->get();
        return view('pages.homepage', compact('slide', 'products', 'featuredProducts'));
    }

    public function getProductType($idType)
    {
        $productsByIdType = Product::where('id_type', $idType)->paginate(6);
        return view('pages.productType', compact('productsByIdType'));
    }

    public function getProductDetail(Request $request)
    {
        $product = Product::where('id', $request->idProduct)->first();
//        $breadcrumbs = DB::table
        $relatedProducts = Product::where('id_type', $product->id_type)->limit(3)->get();
        return view('pages.productDetails', compact('product', 'relatedProducts', 'quantity'));
    }

    public function getCart()
    {
        $content = Cart::content();
        return view('pages.cart', compact('content'));
    }

    public function purchase(Request $request)
    {
        $productBuy = Product::where('id', $request->id)->first();
        $qty = $request->qty;
        Cart::add(['id' => $productBuy->id, 'name' => $productBuy->name, 'qty' => $qty, 'price' => $productBuy->unit_price, 'options' => ['img' => $productBuy->image]]);
//        return redirect()->back();
        return "success";
    }

    public function post_purchase(Request $request)
    {
        $productBuy = Product::where('id', $request->id)->first();

//        foreach ($cart as $item)
//        {
//
//        }
//
//        if($request->has('id')) {
//            if (Cart::where($request->id)) {
//                Cart::update($request->id, $qty);
//            } else {
//                Cart::add(['id' => $productBuy->id, 'name' => $productBuy->name, 'qty' => $qty, 'price' => $productBuy->unit_price, 'options' => ['img' => $productBuy->image]]);
//            }
//        }
//        var_dump($qty);
//        var_dump($request->id);
        //dd($productBuy);

//        var_dump(Cart::content());
//        return redirect()->back();
    }

    public function deleteProduct(Request $request)
    {
        Cart::remove($request->id);
            echo "success";
    }

    public function updateCart(Request $request)
    {
        if ($request->isMethod('GET')) {
            $id = $request->get('id');
            $qty = $request->get('qty');
            Cart::update($id, $qty);
            echo "success";
        }
    }

    public function register(){
        return view('pages.register');
    }

    public function login(){
        return view('pages.login');
    }


}

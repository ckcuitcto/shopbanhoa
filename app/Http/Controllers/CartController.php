<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;

class CartController extends Controller
{
    public function getCart($confirm){
    	if ($confirm == 2) {
            $carts = Bill::orderBy('id')->get();
        } else {
            $carts = Bill::where('confirm', $confirm)->orderBy('id')->get();
        }
    	return view('admin.cart.cart',compact('$carts'));
    }

    public function postCart(Request $request){
    	
    }
}

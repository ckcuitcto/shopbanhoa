<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('index',[
   'as'=>'index',
    'uses'=>'PageController@getIndex'
]);

Route::get('loai-san-pham/{idType}',[
    'as'=>'productType',
    'uses'=>'PageController@getProductType'
]);

Route::get('chi-tiet/{idProduct}',[
    'as' => 'productDetail',
    'uses' => 'PageController@getProductDetail'
]);

Route::get('mua-hang/{id}',[
    'as' => 'purchase',
    'uses' => 'PageController@purchase'
]);

Route::get('gio-hang',[
    'as' => 'cart',
    'uses' => 'PageController@getCart'
]);

Route::get('xoa-san-pham/{id}',[
    'as'=>'deleteProduct',
    'uses' => 'PageController@deleteProduct'
]);


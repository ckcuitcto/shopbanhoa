<?php


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

Route::get('mua-hang/{id}/{qty}',[
    'as' => 'purchase',
    'uses' => 'PageController@purchase'
]);

Route::post('mua-hang-post',[
    'as' => 'post_purchase',
    'uses' => 'PageController@post_purchase'
]);

Route::get('gio-hang',[
    'as' => 'cart',
    'uses' => 'PageController@getCart'
]);

Route::get('xoa-san-pham/{id}',[
    'as'=>'deleteProduct',
    'uses' => 'PageController@deleteProduct'
]);

Route::get('cap-nhat-gio-hang/{id}/{qty}',[
    'as'=>'updateCart',
    'uses' => 'PageController@updateCart'
]);

Route::get('san-pham',[
    'as'=>'products',
    'uses'=>'PageController@getProducts'
]);

Route::get('lien-he',[
    'as'=>'contact',
    'uses'=>'PageController@getContact'
]);

Route::get('gioi_thieu',[
    'as'=>'aboutUs',
    'uses'=>'PageController@getAboutUs'
]);

Route::get('dang-ki',[
    'as'=>'register',
    'uses'=>'PageController@register'
]);

Route::post('dang-ki',[
    'as'=>'register',
    'uses'=>'PageController@postregister'
]);

Route::get('tin-tuc',[
    'as'=>'news',
    'uses'=>'PageController@getNews'
]);

Route::get('dang-nhap',[
    'as'=>'login',
    'uses'=>'PageController@login'
]);

Route::group(['prefix' => 'admin'],function(){
    Route::group(['prefix' => 'productType'],function(){
        Route::get('list',['as' => 'admin.productType.list','uses'=>'ProductTypeController@getList']);
        Route::get('add',['as' => 'admin.productType.getAdd','uses'=>'ProductTypeController@getAdd']);
        Route::post('add',['as' => 'admin.productType.postAdd','uses'=>'ProductTypeController@postAdd']);
    });
});
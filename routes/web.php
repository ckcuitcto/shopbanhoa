<?php

Route::get('/',[
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
    'as' => 'purchaseOneClick',
    'uses' => 'PageController@purchaseOneClick'
]);

Route::post('mua-hang',[
   'as' => 'purchaseProductDetail',
   'uses' => 'PageController@purchaseProductDetail'
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

Route::get('san-pham',['as'=>'getProducts', 'uses'=>'PageController@getProducts']);

Route::get('lien-he',['as'=>'contact', 'uses'=>'PageController@getContact']);
Route::post('lien-he',['as'=>'contact', 'uses'=>'PageController@postContact']);

Route::get('gioi-thieu',[
    'as'=>'introduce',
    'uses'=>'PageController@getIntroduce'
]);

Route::get('dang-ki',[
    'as'=>'register',
    'uses'=>'PageController@register'
]);

Route::post('dang-ki',[
    'as'=>'postregister',
    'uses'=>'PageController@postregister'
]);

Route::get('tin-tuc',[
    'as'=>'news',
    'uses'=>'PageController@getNews'
]);

Route::get('chi-tiet-tin/{idNews}',[
    'as'=>'newsDetails',
    'uses'=>'PageController@getNewsDetails'
]);

Route::get('dang-nhap',[
    'as'=>'login',
    'uses'=>'PageController@login'
]);

Route::post('dang-nhap',[
    'as'=>'login',
    'uses'=>'PageController@postLogin'
]);


Route::group(['prefix' => 'admin','middleware' => 'admin'],function(){
    Route::group(['prefix' => 'productType'],function(){
        Route::get('list',['as' => 'admin.productType.list','uses'=>'ProductTypeController@getList']);

        Route::get('add',['as' => 'admin.productType.getAdd','uses'=>'ProductTypeController@getAdd']);
        Route::post('add',['as' => 'admin.productType.postAdd','uses'=>'ProductTypeController@postAdd']);

        Route::get('delete/{id}',['as' => 'admin.productType.getDelete','uses'=>'ProductTypeController@getDelete']);

        Route::get('edit/{id}',['as' => 'admin.productType.getEdit','uses'=>'ProductTypeController@getEdit']);
        Route::post('edit/{id}',['as' => 'admin.productType.postEdit','uses'=>'ProductTypeController@postEdit']);
    });
    Route::group(['prefix' => 'product'],function(){
        Route::get('list',['as' => 'admin.product.list','uses'=>'ProductController@getList']);
        Route::get('add',['as' => 'admin.product.getAdd','uses'=>'ProductController@getAdd']);
        Route::post('add',['as' => 'admin.product.postAdd','uses'=>'ProductController@postAdd']);

        Route::get('delete/{id}',['as' => 'admin.product.getDelete','uses'=>'ProductController@getDelete']);

        Route::get('edit/{id}',['as' => 'admin.product.getEdit','uses'=>'ProductController@getEdit']);
        Route::post('edit/{id}',['as' => 'admin.product.postEdit','uses'=>'ProductController@postEdit']);

        Route::get('deleteImage/{id}',['as'=>'admin.product.getDeleteProductImage', 'uses' => 'ProductController@getDeleteProductImage']);
    });
    Route::group(['prefix' => 'news'],function(){
        Route::get('list',['as' => 'admin.news.list','uses'=>'NewsController@getList']);
        Route::get('add',['as' => 'admin.news.getAdd','uses'=>'NewsController@getAdd']);
        Route::post('add',['as' => 'admin.news.postAdd','uses'=>'NewsController@postAdd']);

        Route::get('delete/{id}',['as' => 'admin.news.getDelete','uses'=>'NewsController@getDelete']);

        Route::get('edit/{id}',['as' => 'admin.news.getEdit','uses'=>'NewsController@getEdit']);
        Route::post('edit/{id}',['as' => 'admin.news.postEdit','uses'=>'NewsController@postEdit']);

        Route::get('deleteImage/{id}',['as'=>'admin.news.getDeleteNewsImage', 'uses' => 'NewsController@getDeleteNewsImage']);
    });
    Route::group(['prefix' => 'contact'],function (){
        Route::get('contact',['as' => 'admin.contact.getContact','uses' => 'ContactController@getContact']);
        Route::post('contact',['as' => 'admin.contact.postContact','uses' => 'ContactController@postContact']);

        Route::get('contactUs/{confirm}',['as' => 'admin.contact.getContactUs','uses' => 'ContactController@getContactUs']);
        Route::post('contactUs/{confirm}',['as' => 'admin.contact.postContactUs','uses' => 'ContactController@postContactUs']);

        Route::get('detailContact/{id}',['as' => 'admin.contact.getDetailContact','uses' => 'ContactController@getDetailContact']);
        Route::post('detailContact/{id}',['as' => 'admin.contact.postDetailContact','uses' => 'ContactController@postDetailContact']);

    });

    Route::group(['prefix' => 'cart'],function (){
        Route::get('bill/{confirm}',['as' => 'admin.cart.getBill','uses' => 'CartController@getBill']);
//        Route::post('bill/{confirm}',['as' => 'admin.cart.postBill','uses' => 'CartController@postBill']);

        Route::get('billDetail/{id}',['as' => 'admin.cart.getBillDetail','uses' => 'CartController@getBillDetail']);
        Route::post('billDetail/{id}',['as' => 'admin.cart.postBillDetail','uses' => 'CartController@postBillDetail']);

        Route::get('deleteBill/{id}',['as'=>'admin.cart.deleteBill', 'uses' => 'CartController@deleteBill']);
        Route::get('deleteBillDetail/{id}',['as'=>'admin.cart.deleteBillDetail', 'uses' => 'CartController@deleteBillDetail']);
    });
    Route::get('/dashboard',['as' => 'admin.dashboard' , 'uses' => 'AdminController@dashboard']);
    Route::group(['prefix' => 'introduce'],function (){
        Route::get('introduce',['as' => 'admin.introduce.getIntroduce' , 'uses' => 'IntroduceController@getIntroduce']);
        Route::post('introduce',['as' => 'admin.introduce.postIntroduce' , 'uses' => 'IntroduceController@postIntroduce']);

        Route::get('footer',['as' => 'admin.introduce.getFooter' , 'uses' => 'IntroduceController@getFooter']);
        Route::post('footer',['as' => 'admin.introduce.postFooter' , 'uses' => 'IntroduceController@postFooter']);

        
    });

    // Route::get('delete/{id}',['as'=>'admin.slide.getDeleteSlideImage', 'uses' => 'SlideController@getDeleteSlideImage']);

    Route::group(['prefix' => 'slide'],function(){
        Route::get('list',['as' => 'admin.slide.getList','uses'=>'SlideController@getList']);
        Route::post('list',['as' => 'admin.slide.postList','uses'=>'SlideController@postList']);

        Route::get('deleteSlide/{id}',['as'=>'admin.slide.getDeleteSlideImage', 'uses' => 'SlideController@getDeleteSlideImage']);
    });

    Route::group(['prefix' => 'user'],function(){
        Route::get('list',['as' => 'admin.user.list','uses'=>'UsersController@getList']);

        Route::get('delete/{id}',['as' => 'admin.user.getDelete','uses'=>'UsersController@getDelete']);

        Route::get('edit/{id}',['as' => 'admin.user.getEdit','uses'=>'UsersController@getEdit']);
        Route::post('edit/{id}',['as' => 'admin.user.postEdit','uses'=>'UsersController@postEdit']);
    });

});

Route::get('xac-nhan-don-hang',[
    'as' => 'getOrderConfirmation',
    'uses' => 'PageController@getOrderConfirmation'
]);

Route::post('xac-nhan-don-hang',[
    'as' => 'postOrderConfirmation',
    'uses' => 'PageController@postOrderConfirmation'
]);

Route::get('ca-nhan',[
    'as' => 'getPersonal',
    'uses' => 'PageController@getPersonal'
]);

Route::post('ca-nhan',[
    'as' => 'postPersonal',
    'uses' => 'PageController@postPersonal'
]);

Route::get('danh-sach-san-pham-cua-don/{id}',[
   'as' => 'getProductListOfBill',
    'uses' => 'AjaxController@getProductListOfBill'
]);

Auth::routes();

Route::post('doi-mat-khau',[
    'as' => 'changePassword',
    'uses' => 'PageController@changePassword'
]);
?>
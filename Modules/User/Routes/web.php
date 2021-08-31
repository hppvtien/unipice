<?php
// use App\Http\Controllers\PDFController;
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

Route::prefix('user')->middleware('checkLoginUser')->group(function() {
    Route::get('/', 'UserDashboardController@index')->name('get_user.dashboard');
    // Route::post('/', 'UserDashboardController@replaceOrder')->name('get_user.replaceOrder');
    Route::get('/danh-sach-san-pham', 'UserDashboardController@productlist')->name('get_user.productlist');
    Route::get('/danh-sach-san-pham/goi-san-pham-sale', 'UserDashboardController@my_flash_sale')->name('get_user.my_flash_sale');
    Route::get('/danh-sach-san-pham/goi-san-pham-sale/get_product_flash_sale', 'UserDashboardController@get_product_flash_sale')->name('get_user.get_product_flash_sale');
    Route::get('/danh-sach-san-pham/myfavorites', 'UserDashboardController@myfavorites')->name('get_user.myfavorites');
    Route::get('/danh-sach-san-pham/myfavorites/add', 'UserDashboardController@myfavorites_add')->name('get_user.myfavorites_add'); 
    Route::get('/danh-sach-san-pham/myfavorites/delete', 'UserDashboardController@myfavorites_delete')->name('get_user.myfavorites_delete');
    Route::get('/danh-sach-san-pham/myfavorites/filter', 'UserDashboardController@myfavorites_filter')->name('get_user.myfavorites_filter');
    Route::get('/danh-sach-san-pham/filter', 'UserDashboardController@productlist_filter')->name('get_user.productlist_filter');
    Route::get('/don-hang', 'UserDashboardController@listOrder')->name('get_user.list_order');
    Route::get('/user-spice-club', 'UserDashboardController@spice_club')->name('get_user.spice_club');
    Route::get('favourite', 'UserFavouriteController@index')->name('get_user.favourite');
    Route::get('info/edit/{id}', 'UserInfoController@edit')->name('get_user.info.edit');
    Route::post('info/edit/{id}', 'UserInfoController@update');
    Route::get('store/edit/{id}', 'UserInfoController@storeedit')->name('get_user.store.edit');
    Route::post('store/edit/{id}', 'UserInfoController@storeUpdate');

    Route::prefix('cart')->group(function (){
        Route::post('save/{type}', 'UserPayController@processPayCart')->name('post_user.cart.pay');
        Route::get('{id?}/{type?}/add', 'UserShoppingCartController@processCart')->name('get_user.cart.add');    
    });
    Route::prefix('favourite')->group(function (){
        Route::post('save/{type}', 'UserPayController@processPayCart')->name('post_user.cart.pay');
        Route::post('{id}/{type}/add', 'UserFavouriteController@processFavourite')->name('get_user.favourite.add');
    });

    Route::get('/recharge', 'RechargeController@index')->name('get.recharge');
    Route::get('/rechargeup', 'RechargeController@index_up')->name('get.recharge.up');
    Route::post('/recharge/{id}', 'RechargeController@index_up_pos')->name('post.recharge.up');
    Route::post('thanh-toan-nap.html', 'RechargeController@getPayNap')->name('get_user.pay.nap');
    Route::get('thanh-toan-nap/{id}', 'RechargeController@getSuccsess')->name('get_user.paysuccsess.nap'); 
    Route::get('thanh-toan-vnpay-nap/{id}', 'RechargeController@getVnPaySuccsess')->name('get_user.vnpaysuccsess.nap'); 
    Route::post('thanh-toan-vnpay-nap/{id}', 'RechargeController@processVnPayCart')->name('post_user.vnpaysuccsess.nap'); 
    Route::get('thanh-toan-momo-nap/{id}', 'RechargeController@getmomoSuccsess')->name('get_user.momosuccsess.nap'); 
    Route::post('thanh-toan-momo-nap/{id}', 'RechargeController@processmomoCart')->name('post_user.momosuccsess.nap');
    Route::get('thong-bao-thanh-toan-momo-nap.html', 'UserPayController@resultmomo')->name('get_user.result_momo.nap');
    Route::get('return-vnpay.html', 'RechargeController@returnvnpay')->name('get_user.result_vnpay.nap');
});

Route::middleware('checkLoginUser')->group(function() {
    Route::get('thanh-toan.html', 'UserPayController@getPay')->name('get_user.pay');
    Route::post('thanh-toan.html', 'UserPayController@getPaySuccsess')->name('get_user.postpay');
    Route::post('fee-ship-ghn', 'UserPayController@getFeeShipGHN')->name('get_user.feeshipghn');
    Route::get('fee-ship', 'UserPayController@getFeeShip')->name('get_user.feeship');
    Route::post('gio-hang.html', 'UserPayController@check_vouchers')->name('get_user.check_vouchers');
    Route::get('hoan-tat-don-hang.html', 'UserPayController@getSuccsess')->name('get_user.paysuccsess'); 
    Route::get('gio-hang.html', 'UserCartController@index')->name('get_user.cart');
    Route::get('update-gio-hang/{id}', 'UserCartController@updateCart')->name('get_user.updatecart');
    Route::get('xoa-san-pham', 'UserCartController@deletecart')->name('get_user.deletecart');
    Route::get('thanh-toan/{id}', 'UserPayController@getSuccsess')->name('get_user.paysuccsess'); 
    Route::post('thanh-toan/{id}', 'UserPayController@processPayCart')->name('post_user.paysuccsess'); 
    Route::get('thanh-toan-vnpay/{id}', 'UserPayController@getVnPaySuccsess')->name('get_user.vnpaysuccsess'); 
    Route::post('thanh-toan-vnpay/{id}', 'UserPayController@processVnPayCart')->name('post_user.vnpaysuccsess'); 
    Route::get('thanh-toan-momo/{id}', 'UserPayController@getmomoSuccsess')->name('get_user.momosuccsess'); 
    Route::post('thanh-toan-momo/{id}', 'UserPayController@processmomoCart')->name('post_user.momosuccsess'); 
    Route::get('thong-bao-thanh-toan-momo.html', 'UserPayController@resultmomo')->name('get_user.result_momo');
    Route::get('return-vnpay.html', 'UserPayController@returnvnpay')->name('get_user.result_vnpay');
    
});

Route::get('in-pdf.html', 'UserCartController@generatePDF')->name('get_user.generatePDF');
Route::post('in-pdf.html', 'UserCartController@viewPDF');

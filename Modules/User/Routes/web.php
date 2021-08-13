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

    Route::prefix('jobs')->group(function (){
        Route::get('/', 'UserJobsController@index')->name('get_user.jobs');
        Route::get('/addjob', 'UserJobsController@create')->name('get_user.addjobs');
        Route::post('/addjob', 'UserJobsController@addJobs');
        Route::get('/editjob/{id}', 'UserJobsController@edit')->name('get_user.editJobs');
        Route::post('/editjob/{id}', 'UserJobsController@update');
        Route::get('/{id}', 'UserJobsController@delete')->name('get_user.delete');
    });
});

Route::middleware('checkLoginUser')->group(function() {
    Route::get('thanh-toan.html', 'UserPayController@getPay')->name('get_user.pay');
    Route::post('thanh-toan.html', 'UserPayController@getPaySuccsess')->name('get_user.postpay');
    // Route::get('thanh-toan.html', 'UserPayController@getFeeShip')->name('get_user.feeship');
    Route::post('gio-hang.html', 'UserPayController@check_vouchers')->name('get_user.check_vouchers');
    Route::get('hoan-tat-don-hang.html', 'UserPayController@getSuccsess')->name('get_user.paysuccsess'); 
    Route::get('gio-hang.html', 'UserCartController@index')->name('get_user.cart');
    Route::get('update-gio-hang/{id}', 'UserCartController@updateCart')->name('get_user.updatecart');
    Route::get('xoa-san-pham', 'UserCartController@deletecart')->name('get_user.deletecart');
    Route::get('in-pdf.html', 'UserCartController@generatePDF')->name('get_user.generatePDF');
    Route::post('in-pdf.html', 'UserCartController@viewPDF');
    Route::get('thanh-toan/{id}', 'UserPayController@getSuccsess')->name('get_user.paysuccsess'); 

    Route::get('thanh-toan-vnpay/{id}', 'UserPayController@getVnPaySuccsess')->name('get_user.vnpaysuccsess'); 
    Route::post('thanh-toan-vnpay/{id}', 'UserPayController@processVnPayCart')->name('post_user.vnpaysuccsess'); 
    Route::get('thanh-toan-momo/{id}', 'UserPayController@getmomoSuccsess')->name('get_user.momosuccsess'); 
    Route::post('thanh-toan-momo/{id}', 'UserPayController@processmomoCart')->name('post_user.momosuccsess'); 
    Route::get('thong-bao-thanh-toan-momo.html', 'UserPayController@resultmomo')->name('get_user.result_momo');
    Route::get('return-vnpay.html', 'UserPayController@returnvnpay')->name('get_user.result_vnpay');
});



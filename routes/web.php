<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/c', function() {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('route:clear');
    $run = Artisan::call('config:cache');
    
    return 'FINISHED';  
});
Route::group(['namespace' => 'Frontend'], function (){
    Route::get('/','HomeController@index')->name('get.home');
    Route::post('/','HomeController@product_trade')->name('get.product_trade');
    Route::get('/dang-nhap','LoginController@index')->name('get.login');
    Route::post('/dang-nhap','LoginController@login')->name('post.login');
    Route::get('/dang-ky','RegisterController@index')->name('get.register');
    Route::post('/dang-ky','RegisterController@register')->name('post.register');

    Route::get('/verify-email/{code_verication}','RegisterController@verify_email')->name('verify.email');
    Route::get('/forget-password','RegisterController@forgetpassword')->name('get.forgetpassword');
    Route::post('/forget-password','RegisterController@postforgetpassword')->name('post.forgetpassword');
    Route::get('/forget-password{reset_code}','RegisterController@get_reset_code')->name('get.resetcodepassword');
    Route::post('/forget-password{reset_code}','RegisterController@postresetcodepassword')->name('post.resetcodepassword');


    Route::get('gioi-thieu','AboutController@index')->name('get.about');
    Route::get('gio-hang','CartController@index')->name('get.cart');
    Route::get('san-pham/{slug}.html','CategoryController@index')->name('get.category');
    Route::post('san-pham/{slug}.html','CategoryController@fillter_product')->name('get.fillter');
    Route::get('thanh-toan','CheckoutController@index')->name('get.chekout');
    Route::get('faq','FaqsController@index')->name('get.faq');
    Route::get('cua-hang','FindStoreController@index')->name('get.find');
    Route::post('cua-hang','FindStoreController@searchName');
    Route::get('member','MembershipController@index')->name('get.membership');
    Route::get('san-pham/{slug}','ProductController@index')->name('get.product');




    // Route::post('/dang-nhap','LoginController@index')->name('get.login');
    // Route::post('/dang-ky','RegisterController@register')->name('get.register');
    // Route::get('/verify-email/{code_verication}','RegisterController@verify_email')->name('verify.email');
    // Route::get('/forget-password','RegisterController@forgetpassword')->name('get.forgetpassword');
    // Route::post('/forget-password','RegisterController@postforgetpassword')->name('post.forgetpassword');
    // Route::post('/forget-password','RegisterController@postforgetpassword')->name('post.forgetpassword');
    // Route::get('/forget-password{reset_code}','RegisterController@get_reset_code')->name('get.resetcodepassword');
    // Route::post('/forget-password{reset_code}','RegisterController@postresetcodepassword')->name('post.resetcodepassword');
    
    // Route::get('/dang-xuat','RegisterController@logout')->name('get.logout');

});

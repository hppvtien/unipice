<?php

use App\Models\Uni_Contact;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/c', function () {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('route:clear');
    $run = Artisan::call('config:cache');

    return 'FINISHED';
});
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'HomeController@index')->name('get.home');
    Route::post('/', 'HomeController@product_trade')->name('get.product_trade');


    Route::get('/dang-nhap', 'LoginController@index')->name('get.login');
    Route::post('/dang-nhap', 'LoginController@login')->name('post.login');
    Route::get('/dang-ky-spice-club', 'SpiceClubController@spiceclub')->name('get.register.spiceclub');
    Route::post('/dang-ky-spice-club', 'SpiceClubController@registerspiceclub')->name('post.register.spiceclub');
    Route::post('/dang-ky-spice-club/edit/{id}', 'SpiceClubController@update_spiceclub')->name('post_edit_user.register.spiceclub');
    Route::get('/b2b', 'RegisterController@indexb2b')->name('get.register.b2b');
    Route::post('/b2b', 'RegisterController@registerb2b')->name('post.register.b2b');
    Route::get('/dang-ky', 'RegisterController@index')->name('get.register');
    Route::post('/dang-ky', 'RegisterController@register')->name('post.register');
    Route::get('/dang-xuat', 'RegisterController@logout')->name('get.logout');

    Route::get('/verify-email/{code_verication}', 'RegisterController@verify_email')->name('verify.email');
    Route::get('/forget-password', 'RegisterController@forgetpassword')->name('get.forgetpassword');
    Route::post('/forget-password', 'RegisterController@postforgetpassword')->name('post.forgetpassword');
    Route::get('/forget-password{reset_code}', 'RegisterController@get_reset_code')->name('get.resetcodepassword');
    Route::post('/forget-password{reset_code}', 'RegisterController@postresetcodepassword')->name('post.resetcodepassword');

    Route::get('san-pham.html', 'CategoryController@all_product')->name('get.all_product');
    Route::get('thuong-hieu/{slug}.html', 'CategoryController@trade_mark')->name('get.trade_product');

    Route::get('gioi-thieu', 'AboutController@index')->name('get.about');
    Route::get('gio-hang', 'CartController@index')->name('get.cart');
    Route::get('san-pham/{slug}.html', 'CategoryController@index')->name('get.category');
    Route::post('san-pham/{slug}.html', 'CategoryController@fillter_product')->name('get.fillter');
    Route::get('faq', 'FaqsController@index')->name('get.faq');



    Route::get('cua-hang', 'FindStoreController@index')->name('get.find');
    Route::post('cua-hang', 'FindStoreController@searchName');
    Route::get('khuyen-mai', 'FlashSaleController@index')->name('get.flashsale');
    Route::get('khuyen-mai/{slug}', 'FlashSaleController@singleFlashSale')->name('get.flashsale.single');
    Route::get('member', 'MembershipController@index')->name('get.membership');
    Route::get('san-pham/{slug}', 'ProductController@index')->name('get.product');
    Route::post('san-pham/{slug}/thembinhluan', 'ProductController@thembinhluan')->name('get.product_comment');
    Route::get('lien-he', 'Uni_ContactController@index')->name('get.uni_contact');
    Route::post('lien-he', 'Uni_ContactController@submitContact')->name('post.uni_contact');
    Route::post('newsletters', 'Uni_ContactController@getNewsLetters')->name('post.uni_contact.newsletters');
    Route::get('tim-kiem', 'SearchController@search')->name('get.search');
    Route::get('spice-club', 'SpiceClubController@index')->name('get.spice_club');
    Route::get('bai-viet', 'BlogHomeController@index')->name('get_blog.home');
    Route::post('bai-viet', 'BlogHomeController@fillter_post');
    Route::get('bai-viet/{slug}', 'BlogHomeController@SingleBlog')->name('get_blog.single_blog');
    Route::get('thoa-thuan-su-dung/{slug}', 'BlogHomeController@SinglePolice')->name('get_blog.single_police');
    Route::post('bai-viet/{slug}/add_comment_post', 'BlogHomeController@add_comment_post')->name('get_blog.add_comment_post');
    Route::get('danh-muc-bai-viet/{slug}', 'BlogHomeController@SingleCat')->name('get_blog.single_cat');
    Route::get('thoa-thuan-su-dung', 'BlogHomeController@ThoaThuan')->name('get.thoa_thuan_su_dung');
    Route::get('chinh-sach-bao-mat', 'HomeController@BaoMat')->name('get.chinh_sach_bao_mat');
    Route::get('sitemap', 'SitemapController@sitemap')->name('get_site_map');
    Route::get('/verify-email-new/{code_verication}', 'Uni_ContactController@verify_email_new')->name('verify.email.new');
});


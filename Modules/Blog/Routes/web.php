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

    Route::get('bai-viet', 'BlogHomeController@index')->name('get_blog.home');
    Route::post('bai-viet', 'BlogHomeController@fillter_post');
    Route::get('bai-viet/{slug}', 'BlogHomeController@SingleBlog')->name('get_blog.single_blog');
    Route::get('danh-muc-bai-viet/{slug}', 'BlogHomeController@SingleCat')->name('get_blog.single_cat');

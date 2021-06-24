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

Route::prefix('bai-viet')->group(function() {
    Route::get('/', 'BlogHomeController@index')->name('get_blog.home');
    Route::get('/{slug}', 'BlogHubController@renderBlog')->name('get_blog.render');
    Route::post('/{slug?}', 'BlogMenuController@getArticleByCat')->name('get_blog.cat_news');
});

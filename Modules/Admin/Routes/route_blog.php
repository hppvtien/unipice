
<?php

Route::prefix('blog-post')->namespace('Blog')->group(function (){

    Route::prefix('post_category')->group(function (){
        Route::get('/', 'AdminUniPostCategoryController@index')->name('get_admin.post_category.index')->middleware('permission:post_category_index|full');
        Route::get('/create', 'AdminUniPostCategoryController@create')->name('get_admin.post_category.create')->middleware('permission:post_category_create|full');
        Route::post('/create', 'AdminUniPostCategoryController@store');
        Route::get('update/{id}', 'AdminUniPostCategoryController@edit')->name('get_admin.post_category.edit')->middleware('permission:post_category_edit|full');
        Route::post('update/{id}', 'AdminUniPostCategoryController@update');
        Route::get('delete/{id}', 'AdminUniPostCategoryController@delete')->name('get_admin.post_category.delete')->middleware('permission:post_category_delete|full');
    });
    Route::prefix('post')->group(function (){
        Route::get('/', 'AdminUniPostController@index')->name('get_admin.post.index')->middleware('permission:post_index|full');
        Route::get('/create', 'AdminUniPostController@create')->name('get_admin.post.create')->middleware('permission:post_create|full');
        Route::post('/create', 'AdminUniPostController@store');
        Route::get('update/{id}', 'AdminUniPostController@edit')->name('get_admin.post.edit')->middleware('permission:post_edit|full');
        Route::post('update/{id}', 'AdminUniPostController@update');
        Route::get('delete/{id}', 'AdminUniPostController@delete')->name('get_admin.post.delete')->middleware('permission:post_delete|full');
        Route::post('/search_ajax', 'AdminUniPostController@search_ajax')->name('get_admin.post.search_ajax');
    });
    
});


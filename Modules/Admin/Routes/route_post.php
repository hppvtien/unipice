
<?php

Route::prefix('blog-post')->namespace('Blog Post')->group(function (){

    Route::prefix('post-category')->group(function (){
        Route::get('/', 'AdminPostCategoryController@index')->name('get_admin.post-category.index');
        Route::get('/create', 'AdminPostCategoryController@create')->name('get_admin.post-category.create');
        Route::post('/create', 'AdminPostCategoryController@store');
        Route::get('update/{id}', 'AdminPostCategoryController@edit')->name('get_admin.post-category.edit');
        Route::post('update/{id}', 'AdminPostCategoryController@update');
        Route::get('delete/{id}', 'AdminPostCategoryController@delete')->name('get_admin.post-category.delete');
    });
    Route::prefix('post')->group(function (){
        Route::get('/', 'AdminPostController@index')->name('get_admin.post.index');
        Route::get('/create', 'AdminPostController@create')->name('get_admin.post.create');
        Route::post('/create', 'AdminPostController@store');
        Route::get('update/{id}', 'AdminPostController@edit')->name('get_admin.post.edit');
        Route::post('update/{id}', 'AdminPostController@update');
        Route::get('delete/{id}', 'AdminPostController@delete')->name('get_admin.post.delete');
    });
    
    
});


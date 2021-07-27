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


Route::group(['namespace' => 'Auth','prefix' => 'auth'], function (){
    Route::get('login','AdminLoginController@login')->name('get_admin.login');
    Route::post('login','AdminLoginController@postLogin');

    Route::get('logout','AdminLoginController@logout')->name('get_admin.logout');
});
Route::prefix('admin')->middleware('checkLoginAdmin')->group(function() {
    Route::get('/', 'AdminDashboardController@index')->name('get_admin.dashboard')->middleware('permission:dashboard|full');

    Route::prefix('tag')->group(function (){
        Route::get('/', 'AdminTagController@index')->name('get_admin.tag.index')->middleware('permission:tag_index|full');
        Route::get('/create', 'AdminTagController@create')->name('get_admin.tag.create')->middleware('permission:tag_create|full');
        Route::post('/create', 'AdminTagController@store');
        Route::get('update/{id}', 'AdminTagController@edit')->name('get_admin.tag.edit')->middleware('permission:tag_edit|full');
        Route::post('update/{id}', 'AdminTagController@update');
        Route::get('delete/{id}', 'AdminTagController@delete')->name('get_admin.tag.delete')->middleware('permission:tag_delete|full');
    });

    Route::prefix('category')->group(function (){
        Route::get('/', 'AdminCategoryController@index')->name('get_admin.category.index')->middleware('permission:category_index|full');
        Route::get('/create', 'AdminCategoryController@create')->name('get_admin.category.create')->middleware('permission:category_create|full');
        Route::post('/create', 'AdminCategoryController@store');
        Route::get('update/{id}', 'AdminCategoryController@edit')->name('get_admin.category.edit')->middleware('permission:category_edit|full');
        Route::post('update/{id}', 'AdminCategoryController@update');
        Route::get('delete/{id}', 'AdminCategoryController@delete')->name('get_admin.category.delete')->middleware('permission:category_delete|full');
    });


    Route::prefix('slide')->group(function (){
        Route::get('/', 'AdminSlideController@index')->name('get_admin.slide.index')->middleware('permission:slide_index|full');
        Route::get('/create', 'AdminSlideController@create')->name('get_admin.slide.create')->middleware('permission:slide_create|full');
        Route::post('/create', 'AdminSlideController@store');
        Route::get('update/{id}', 'AdminSlideController@edit')->name('get_admin.slide.edit')->middleware('permission:slide_edit|full');
        Route::post('update/{id}', 'AdminSlideController@update');
        Route::get('delete/{id}', 'AdminSlideController@delete')->name('get_admin.slide.delete')->middleware('permission:slide_delete|full');
    });
    Route::prefix('page')->group(function (){
        Route::get('/', 'AdminPageController@index')->name('get_admin.page.index');
        Route::get('/create', 'AdminPageController@create')->name('get_admin.page.create');
        Route::post('/create', 'AdminPageController@store');
        Route::get('update/{id}', 'AdminPageController@edit')->name('get_admin.page.edit');
        Route::post('update/{id}', 'AdminPageController@update');
        Route::get('delete/{id}', 'AdminPageController@delete')->name('get_admin.page.delete');
    });
    Route::prefix('voucher')->group(function (){
        Route::get('/', 'AdminVoucherController@index')->name('get_admin.voucher.index');
        Route::post('/generate_code', 'AdminVoucherController@generate_code')->name('get_admin.voucher.generate_code');
        Route::get('/create', 'AdminVoucherController@create')->name('get_admin.voucher.create');
        Route::post('/create', 'AdminVoucherController@store');
        Route::get('update/{id}', 'AdminVoucherController@edit')->name('get_admin.voucher.edit');
        Route::post('update/{id}', 'AdminVoucherController@update');
        Route::get('delete/{id}', 'AdminVoucherController@delete')->name('get_admin.voucher.delete');
    });
    Route::prefix('configuration')->group(function (){
        Route::get('/', 'AdminConfigurationController@index')->name('get_admin.configuration.index')
            ->middleware('permission:configuration_index|full');
        Route::post('/', 'AdminConfigurationController@store');
    });

    Route::prefix('ajax')->namespace('Ajax')->group(function (){
        Route::post('/upload/image', 'AdminAjaxUploadImageController@processUpload')->name('post_ajax_admin.uploads');
    });

    Route::prefix('user')->group(function (){
        Route::get('/', 'AdminUserController@index')->name('get_admin.user.index')->middleware('permission:user_index|full');
        Route::get('movetrash', 'AdminUserController@indexmovetrash')->name('get.indexmovetrash');
        Route::get('update/{id}', 'AdminUserController@edit')->name('get_admin.user.edit')->middleware('permission:user_edit|full');
        Route::post('update/{id}', 'AdminUserController@update');
        Route::get('movetrash/{id}', 'AdminUserController@movetrash')->name('get_admin.user.movetrash');
        Route::get('delete/{id}', 'AdminUserController@delete')->name('get_admin.user.delete')->middleware('permission:user_delete|full');
    });
    
    // ----------------------------------------------------------------------------------------------------------------
    Route::prefix('apmenu')->group(function (){
        Route::get('/', 'AdminApMenuController@index')->name('get_admin.apmenu.index');
        Route::post('/', 'AdminApMenuController@ajax_load')->name('get_admin.apmenu.ajax_load');
        Route::any('/', 'AdminApMenuController@ajax_load_menu')->name('get_admin.apmenu.ajax_load_menu');
        // Route::post('/', 'AdminApMenuController@ajax_save_menu')->name('get_admin.apmenu.ajax_save_menu');



        
    });
    Route::prefix('bill')->group(function (){
        Route::get('/', 'AdminBillController@index')->name('get_admin.bill.index');
        Route::post('/', 'AdminBillController@viewBill')->name('get_admin.bill.view');
    });
    // --------------------------------------------------------------------------------------------------------------------
    Route::prefix('contact')->group(function (){
        Route::get('/', 'AdminUniContactController@index')->name('get_admin.uni_contact.index');
        Route::post('/', 'AdminUniContactController@update')->name('get_admin.uni_contact.edit');
        Route::get('delete/{id}', 'AdminUniContactController@delete')->name('get_admin.uni_contact.delete');
    });

    Route::prefix('uni_product')->group(function (){
        Route::get('/', 'AdminUniProductController@index')->name('get_admin.uni_product.index');
        Route::get('/create', 'AdminUniProductController@create')->name('get_admin.uni_product.create');
        Route::post('/create', 'AdminUniProductController@store');
        Route::get('update/{id}', 'AdminUniProductController@edit')->name('get_admin.uni_product.edit');
        Route::post('update/{id}', 'AdminUniProductController@update');
        Route::get('delete/{id}', 'AdminUniProductController@delete')->name('get_admin.uni_product.delete');
        Route::get('update/{id?}', 'AdminUniProductController@delete_album')->name('get_admin.uni_product.delete_album');
        Route::get('import/{id}', 'AdminUniProductController@importview')->name('get_admin.uni_product.import');
        Route::post('import/{id}', 'AdminUniProductController@import');
    });
    Route::prefix('uni_category')->group(function (){
        Route::get('/', 'AdminUniCategoryController@index')->name('get_admin.uni_category.index');
        Route::get('/create', 'AdminUniCategoryController@create')->name('get_admin.uni_category.create');
        Route::post('/create', 'AdminUniCategoryController@store');
        Route::get('update/{id}', 'AdminUniCategoryController@edit')->name('get_admin.uni_category.edit');
        Route::post('update/{id}', 'AdminUniCategoryController@update');
        Route::get('delete/{id}', 'AdminUniCategoryController@delete')->name('get_admin.uni_category.delete');
    });
    Route::prefix('uni_color')->group(function (){
        Route::get('/', 'AdminUniColorController@index')->name('get_admin.uni_color.index');
        Route::get('/create', 'AdminUniColorController@create')->name('get_admin.uni_color.create');
        Route::post('/create', 'AdminUniColorController@store');
        Route::get('update/{id}', 'AdminUniColorController@edit')->name('get_admin.uni_color.edit');
        Route::post('update/{id}', 'AdminUniColorController@update');
        Route::get('delete/{id}', 'AdminUniColorController@delete')->name('get_admin.uni_color.delete');
    });
    Route::prefix('uni_trade')->group(function (){
        Route::get('/', 'AdminUniTradeController@index')->name('get_admin.uni_trade.index');
        Route::get('/create', 'AdminUniTradeController@create')->name('get_admin.uni_trade.create');
        Route::post('/create', 'AdminUniTradeController@store');
        Route::get('update/{id}', 'AdminUniTradeController@edit')->name('get_admin.uni_trade.edit');
        Route::post('update/{id}', 'AdminUniTradeController@update');
        Route::get('delete/{id}', 'AdminUniTradeController@delete')->name('get_admin.uni_trade.delete');
    });
    Route::prefix('uni_size')->group(function (){
        Route::get('/', 'AdminUniSizeController@index')->name('get_admin.uni_size.index');
        Route::get('/create', 'AdminUniSizeController@create')->name('get_admin.uni_size.create');
        Route::post('/create', 'AdminUniSizeController@store');
        Route::get('update/{id}', 'AdminUniSizeController@edit')->name('get_admin.uni_size.edit');
        Route::post('update/{id}', 'AdminUniSizeController@update');
        Route::get('delete/{id}', 'AdminUniSizeController@delete')->name('get_admin.uni_size.delete');
    });
    Route::prefix('uni_supplier')->group(function (){
        Route::get('/', 'AdminUniSupplierController@index')->name('get_admin.uni_supplier.index');
        Route::get('/create', 'AdminUniSupplierController@create')->name('get_admin.uni_supplier.create');
        Route::post('/create', 'AdminUniSupplierController@store');
        Route::get('update/{id}', 'AdminUniSupplierController@edit')->name('get_admin.uni_supplier.edit');
        Route::post('update/{id}', 'AdminUniSupplierController@update');
        Route::get('delete/{id}', 'AdminUniSupplierController@delete')->name('get_admin.uni_supplier.delete');
    });
    Route::prefix('uni_lotproduct')->group(function (){
        Route::get('/', 'AdminUniLotProductController@index')->name('get_admin.uni_lotproduct.index');
        Route::get('/create', 'AdminUniLotProductController@create')->name('get_admin.uni_lotproduct.create');
        Route::post('/create', 'AdminUniLotProductController@store');
        Route::get('update/{id}', 'AdminUniLotProductController@edit')->name('get_admin.uni_lotproduct.edit');
        Route::post('update/{id}', 'AdminUniLotProductController@update');
        Route::get('delete/{id}', 'AdminUniLotProductController@delete')->name('get_admin.uni_lotproduct.delete');
    });
    Route::prefix('uni_tag')->group(function (){
        Route::get('/', 'AdminUniTagController@index')->name('get_admin.uni_tag.index');
        Route::get('/create', 'AdminUniTagController@create')->name('get_admin.uni_tag.create');
        Route::post('/create', 'AdminUniTagController@store');
        Route::get('update/{id}', 'AdminUniTagController@edit')->name('get_admin.uni_tag.edit');
        Route::post('update/{id}', 'AdminUniTagController@update');
        Route::get('delete/{id}', 'AdminUniTagController@delete')->name('get_admin.uni_tag.delete');
    });
    Route::prefix('uni_store')->group(function (){
        Route::get('/', 'AdminUniStoreController@index')->name('get_admin.uni_store.index');
        Route::get('/create', 'AdminUniStoreController@create')->name('get_admin.uni_store.create');
        Route::post('/create', 'AdminUniStoreController@store');
        Route::get('update/{id}', 'AdminUniStoreController@edit')->name('get_admin.uni_store.edit');
        Route::post('update/{id}', 'AdminUniStoreController@update');
        Route::get('update/{id?}', 'AdminUniStoreController@delete_album')->name('get_admin.uni_store.delete_album');
        Route::get('delete/{id}', 'AdminUniStoreController@delete')->name('get_admin.uni_store.delete');
    });
    Route::prefix('uni_flashsale')->group(function (){
        Route::get('/', 'AdminUniFlashSaleController@index')->name('get_admin.uni_flashsale.index');
        Route::get('/create', 'AdminUniFlashSaleController@create')->name('get_admin.uni_flashsale.create');
        Route::post('/create', 'AdminUniFlashSaleController@store');
        Route::get('update/{id}', 'AdminUniFlashSaleController@edit')->name('get_admin.uni_flashsale.edit');
        Route::post('update/{id}', 'AdminUniFlashSaleController@update');
        Route::get('delete/{id}', 'AdminUniFlashSaleController@delete')->name('get_admin.uni_flashsale.delete');
    });
    Route::prefix('blog-post')->namespace('Blog')->group(function (){

        Route::prefix('post_category')->group(function (){
            Route::get('/', 'AdminUniPostCategoryController@index')->name('get_admin.post_category.index');
            Route::get('/create', 'AdminUniPostCategoryController@create')->name('get_admin.post_category.create');
            Route::post('/create', 'AdminUniPostCategoryController@store');
            Route::get('update/{id}', 'AdminUniPostCategoryController@edit')->name('get_admin.post_category.edit');
            Route::post('update/{id}', 'AdminUniPostCategoryController@update');
            Route::get('delete/{id}', 'AdminUniPostCategoryController@delete')->name('get_admin.post_category.delete');
        });
        Route::prefix('post')->group(function (){
            Route::get('/', 'AdminUniPostController@index')->name('get_admin.post.index');
            Route::get('/create', 'AdminUniPostController@create')->name('get_admin.post.create');
            Route::post('/create', 'AdminUniPostController@store');
            Route::get('update/{id}', 'AdminUniPostController@edit')->name('get_admin.post.edit');
            Route::post('update/{id}', 'AdminUniPostController@update');
            Route::get('delete/{id}', 'AdminUniPostController@delete')->name('get_admin.post.delete');
        });
        
    });



    require_once 'route_acl.php';
    require_once 'route_blog.php';
    require_once 'route_cart.php';
});

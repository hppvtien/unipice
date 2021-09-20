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


Route::group(['namespace' => 'Auth', 'prefix' => 'auth'], function () {
    Route::get('login', 'AdminLoginController@login')->name('get_admin.login');
    Route::post('login', 'AdminLoginController@postLogin');

    Route::get('logout', 'AdminLoginController@logout')->name('get_admin.logout');
});
Route::prefix('admin')->middleware('checkLoginAdmin')->group(function () {
    Route::get('/', 'AdminDashboardController@index')->name('get_admin.dashboard')->middleware('permission:dashboard|full');
    Route::post('/update_level', 'AdminDashboardController@update_level')->name('adm.update_level');
    // Route::post('/update_nap_status', 'AdminDashboardController@update_status')->name('adm.update_level');;
    Route::prefix('slide')->group(function () {
        Route::get('/', 'AdminSlideController@index')->name('get_admin.slide.index')->middleware('permission:slide_index|full');
        Route::get('/create', 'AdminSlideController@create')->name('get_admin.slide.create')->middleware('permission:slide_create|full');
        Route::post('/create', 'AdminSlideController@store');
        Route::get('update/{id}', 'AdminSlideController@edit')->name('get_admin.slide.edit')->middleware('permission:slide_edit|full');
        Route::post('update/{id}', 'AdminSlideController@update');
        Route::get('delete/{id}', 'AdminSlideController@delete')->name('get_admin.slide.delete')->middleware('permission:slide_delete|full');
    });
    Route::prefix('comment_review')->group(function () {
        Route::get('/question', 'AdminUniCommentController@index')->name('get_admin.uni_comment.index')->middleware('permission:uni_comment_index|full');
        Route::get('/review', 'AdminUniCommentController@index_rv')->name('get_admin.uni_comment.index_rv')->middleware('permission:uni_comment_index|full');
        Route::post('/review', 'AdminUniCommentController@editRv')->name('get_admin.uni_comment.editrv');
        Route::get('update/{id}', 'AdminUniCommentController@edit')->name('get_admin.uni_comment.edit')->middleware('permission:uni_comment_edit|full');
        Route::post('update/{id}', 'AdminUniCommentController@update');
        Route::get('delete/{id}', 'AdminUniCommentController@delete')->name('get_admin.uni_comment.delete')->middleware('permission:uni_comment_delete|full');
    });
    Route::prefix('page')->group(function () {
        Route::get('/', 'AdminPageController@index')->name('get_admin.page.index')->middleware('permission:page_index|full');
        Route::get('/create', 'AdminPageController@create')->name('get_admin.page.create')->middleware('permission:page_create|full');
        Route::post('/create', 'AdminPageController@store');
        Route::get('update/{id}', 'AdminPageController@edit')->name('get_admin.page.edit')->middleware('permission:page_edit|full');
        Route::post('update/{id}', 'AdminPageController@update');
        Route::get('delete/{id}', 'AdminPageController@delete')->name('get_admin.page.delete')->middleware('permission:page_delete|full');
    });
    Route::prefix('content_page')->group(function () {
        Route::get('/create/{id}', 'AdminContentPageController@create')->name('get_admin.content_page.create')->middleware('permission:content_page_create|full');
        Route::post('/create/{id}', 'AdminContentPageController@store');
        Route::get('update/{id}', 'AdminContentPageController@edit')->name('get_admin.content_page.edit')->middleware('permission:content_page_edit|full');
        Route::post('update/{id}', 'AdminContentPageController@update');
        Route::get('delete/{id}', 'AdminContentPageController@delete')->name('get_admin.content_page.delete')->middleware('permission:content_page_delete|full');
    });
    Route::prefix('voucher')->group(function () {
        Route::get('/', 'AdminVoucherController@index')->name('get_admin.voucher.index')->middleware('permission:voucher_index|full');
        Route::post('/generate_code', 'AdminVoucherController@generate_code')->name('get_admin.voucher.generate_code');
        Route::get('/create', 'AdminVoucherController@create')->name('get_admin.voucher.create')->middleware('permission:voucher_create|full');
        Route::post('/create', 'AdminVoucherController@store');
        Route::get('update/{id}', 'AdminVoucherController@edit')->name('get_admin.voucher.edit')->middleware('permission:voucher_edit|full');
        Route::post('update/{id}', 'AdminVoucherController@update');
        Route::get('delete/{id}', 'AdminVoucherController@delete')->name('get_admin.voucher.delete')->middleware('permission:voucher_delete|full');
    });

    Route::prefix('configuration')->group(function () {
        Route::get('/', 'AdminConfigurationController@index')->name('get_admin.configuration.index')->middleware('permission:setting_index|full');
        Route::post('/', 'AdminConfigurationController@store');
    });

    Route::prefix('ajax')->namespace('Ajax')->group(function () {
        Route::post('/upload/image', 'AdminAjaxUploadImageController@processUpload')->name('post_ajax_admin.uploads');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', 'AdminUserController@index')->name('get_admin.user.index')->middleware('permission:user_index|full');
        Route::get('/spice-club', 'AdminUserController@indexSC')->name('get_admin.user.index_spice_club')->middleware('permission:user_index|full');
        Route::get('/store', 'AdminUserController@store_index')->name('get_admin.user.store_index')->middleware('permission:user_index|full');
        Route::get('movetrash', 'AdminUserController@indexmovetrash')->name('get.indexmovetrash');
        Route::get('update/{id}', 'AdminUserController@edit')->name('get_admin.user.edit')->middleware('permission:user_edit|full');
        Route::post('update/{id}', 'AdminUserController@update');
        Route::get('movetrash/{id}', 'AdminUserController@movetrash')->name('get_admin.user.movetrash');
        Route::get('delete/{id}', 'AdminUserController@delete')->name('get_admin.user.delete')->middleware('permission:user_delete|full');
    });
    Route::prefix('bank_info')->group(function () {
        Route::get('/', 'AdminBankInfoController@index')->name('get_admin.bank_info.index')->middleware('permission:bank_info_index|full');
        Route::get('/create', 'AdminBankInfoController@store')->name('get_admin.bank_info.create')->middleware('permission:bank_info_index|full');
        Route::post('/create', 'AdminBankInfoController@create');
        Route::get('update/{id}', 'AdminBankInfoController@edit')->name('get_admin.bank_info.edit')->middleware('permission:bank_info_edit|full');
        Route::post('update/{id}', 'AdminBankInfoController@update');
        Route::get('delete/{id}', 'AdminBankInfoController@delete')->name('get_admin.bank_info.delete')->middleware('permission:bank_info_delete|full');
    });

    // ----------------------------------------------------------------------------------------------------------------
    Route::prefix('apmenu')->group(function () {
        Route::get('/', 'AdminApMenuController@index')->name('get_admin.apmenu.index');
        Route::post('/', 'AdminApMenuController@ajax_load')->name('get_admin.apmenu.ajax_load');
        Route::any('/', 'AdminApMenuController@ajax_load_menu')->name('get_admin.apmenu.ajax_load_menu');
        // Route::post('/', 'AdminApMenuController@ajax_save_menu')->name('get_admin.apmenu.ajax_save_menu');
    });
    Route::prefix('bill')->group(function () {
        Route::get('/', 'AdminBillController@index')->name('get_admin.bill.index')->middleware('permission:slide_index|full');
        Route::get('/index_order', 'AdminBillController@index_order')->name('get_admin.bill.index_order');
        Route::post('/', 'AdminBillController@viewBill')->name('get_admin.bill.view')->middleware('permission:slide_index|full');
        Route::post('/search_ajax', 'AdminBillController@search_ajax')->name('get_admin.bill.search_ajax');
        Route::post('/ajax_index', 'AdminBillController@ajax_index')->name('get_admin.bill.ajax_index');
    });
    // --------------------------------------------------------------------------------------------------------------------
    Route::prefix('contact')->group(function () {
        Route::get('/', 'AdminUniContactController@index')->name('get_admin.uni_contact.index')->middleware('permission:uni_contact_index|full');
        Route::get('/new', 'AdminUniContactController@indexNew')->name('get_admin.uni_contact.indexNew')->middleware('permission:uni_contact_index|full');
        Route::post('/', 'AdminUniContactController@update')->name('get_admin.uni_contact.edit')->middleware('permission:uni_contact_edit|full');
        Route::get('delete/{id}', 'AdminUniContactController@delete')->name('get_admin.uni_contact.delete')->middleware('permission:uni_contact_delete|full');
    });

    Route::prefix('uni_product')->group(function () {
        Route::get('/', 'AdminUniProductController@index')->name('get_admin.uni_product.index')->middleware('permission:uni_product_index|full');
        Route::get('/create', 'AdminUniProductController@create')->name('get_admin.uni_product.create')->middleware('permission:uni_product_create|full');
        Route::post('/create', 'AdminUniProductController@store');
        Route::get('update/{id}', 'AdminUniProductController@edit')->name('get_admin.uni_product.edit')->middleware('permission:uni_product_edit|full');
        Route::post('update/{id}', 'AdminUniProductController@update');
        Route::get('delete/{id}', 'AdminUniProductController@delete')->name('get_admin.uni_product.delete')->middleware('permission:uni_product_delete|full');
        Route::get('update/{id?}', 'AdminUniProductController@delete_album')->name('get_admin.uni_product.delete_album');
        Route::get('import/{id}', 'AdminUniProductController@importview')->name('get_admin.uni_product.import');
        Route::post('import/{id}', 'AdminUniProductController@import');
        Route::post('/search_ajax', 'AdminUniProductController@search_ajax')->name('get_admin.uni_product.search_ajax');
        Route::post('/update-weight', 'AdminUniProductController@updateWeight')->name('get_admin.uni_product.update_weight');
    });
    Route::prefix('uni_category')->group(function () {
        Route::get('/', 'AdminUniCategoryController@index')->name('get_admin.uni_category.index')->middleware('permission:uni_category_index|full');
        Route::get('/create', 'AdminUniCategoryController@create')->name('get_admin.uni_category.create')->middleware('permission:uni_category_create|full');
        Route::post('/create', 'AdminUniCategoryController@store');
        Route::get('update/{id}', 'AdminUniCategoryController@edit')->name('get_admin.uni_category.edit')->middleware('permission:uni_category_edit|full');
        Route::post('update/{id}', 'AdminUniCategoryController@update');
        Route::get('delete/{id}', 'AdminUniCategoryController@delete')->name('get_admin.uni_category.delete')->middleware('permission:uni_category_delete|full');
    });
    Route::prefix('uni_color')->group(function () {
        Route::get('/', 'AdminUniColorController@index')->name('get_admin.uni_color.index')->middleware('permission:uni_color_index|full');
        Route::get('/create', 'AdminUniColorController@create')->name('get_admin.uni_color.create')->middleware('permission:uni_color_create|full');
        Route::post('/create', 'AdminUniColorController@store');
        Route::get('update/{id}', 'AdminUniColorController@edit')->name('get_admin.uni_color.edit')->middleware('permission:uni_color_edit|full');
        Route::post('update/{id}', 'AdminUniColorController@update');
        Route::get('delete/{id}', 'AdminUniColorController@delete')->name('get_admin.uni_color.delete')->middleware('permission:uni_color_delete|full');
    });
    Route::prefix('uni_trade')->group(function () {
        Route::get('/', 'AdminUniTradeController@index')->name('get_admin.uni_trade.index')->middleware('permission:uni_trade_index|full');
        Route::get('/create', 'AdminUniTradeController@create')->name('get_admin.uni_trade.create')->middleware('permission:uni_trade_create|full');
        Route::post('/create', 'AdminUniTradeController@store');
        Route::get('update/{id}', 'AdminUniTradeController@edit')->name('get_admin.uni_trade.edit')->middleware('permission:uni_trade_edit|full');
        Route::post('update/{id}', 'AdminUniTradeController@update');
        Route::get('delete/{id}', 'AdminUniTradeController@delete')->name('get_admin.uni_trade.delete')->middleware('permission:uni_trade_delete|full');
    });
    Route::prefix('uni_size')->group(function () {
        Route::get('/', 'AdminUniSizeController@index')->name('get_admin.uni_size.index')->middleware('permission:uni_size_index|full');
        Route::get('/create', 'AdminUniSizeController@create')->name('get_admin.uni_size.create')->middleware('permission:uni_size_create|full');
        Route::post('/create', 'AdminUniSizeController@store');
        Route::get('update/{id}', 'AdminUniSizeController@edit')->name('get_admin.uni_size.edit')->middleware('permission:uni_size_edit|full');
        Route::post('update/{id}', 'AdminUniSizeController@update');
        Route::get('delete/{id}', 'AdminUniSizeController@delete')->name('get_admin.uni_size.delete')->middleware('permission:uni_size_delete|full');
    });
    Route::prefix('uni_supplier')->group(function () {
        Route::get('/', 'AdminUniSupplierController@index')->name('get_admin.uni_supplier.index')->middleware('permission:uni_supplier_index|full');
        Route::get('/create', 'AdminUniSupplierController@create')->name('get_admin.uni_supplier.create')->middleware('permission:uni_supplier_create|full');
        Route::post('/create', 'AdminUniSupplierController@store');
        Route::get('update/{id}', 'AdminUniSupplierController@edit')->name('get_admin.uni_supplier.edit')->middleware('permission:uni_supplier_edit|full');
        Route::post('update/{id}', 'AdminUniSupplierController@update');
        Route::get('delete/{id}', 'AdminUniSupplierController@delete')->name('get_admin.uni_supplier.delete')->middleware('permission:uni_supplier_delete|full');
    });
    Route::prefix('uni_lotproduct')->group(function () {
        Route::get('/', 'AdminUniLotProductController@index')->name('get_admin.uni_lotproduct.index')->middleware('permission:uni_lotproduct_index|full');
        Route::get('/create', 'AdminUniLotProductController@create')->name('get_admin.uni_lotproduct.create')->middleware('permission:uni_lotproduct_create|full');
        Route::post('/create', 'AdminUniLotProductController@store');
        Route::get('update/{id}', 'AdminUniLotProductController@edit')->name('get_admin.uni_lotproduct.edit')->middleware('permission:uni_lotproduct_edit|full');
        Route::post('update/{id}', 'AdminUniLotProductController@update');
        Route::get('delete/{id}', 'AdminUniLotProductController@delete')->name('get_admin.uni_lotproduct.delete')->middleware('permission:uni_lotproduct_delete|full');
        Route::get('lot-import/{id}', 'AdminUniLotProductController@importview')->name('get_admin.uni_lotproduct.import');
        Route::post('lot-import/{id}', 'AdminUniLotProductController@import');
    });
    Route::prefix('uni_tag')->group(function () {
        Route::get('/', 'AdminUniTagController@index')->name('get_admin.uni_tag.index')->middleware('permission:uni_tag_index|full');
        Route::get('/create', 'AdminUniTagController@create')->name('get_admin.uni_tag.create')->middleware('permission:uni_tag_create|full');
        Route::post('/create', 'AdminUniTagController@store');
        Route::get('update/{id}', 'AdminUniTagController@edit')->name('get_admin.uni_tag.edit')->middleware('permission:uni_tag_edit|full');
        Route::post('update/{id}', 'AdminUniTagController@update');
        Route::get('delete/{id}', 'AdminUniTagController@delete')->name('get_admin.uni_tag.delete')->middleware('permission:uni_tag_delete|full');
    });
    Route::prefix('uni_store')->group(function () {
        Route::get('/', 'AdminUniStoreController@index')->name('get_admin.uni_store.index')->middleware('permission:uni_store_index|full');
        Route::get('view/{id}', 'AdminUniStoreController@view_store')->name('get_admin.uni_store.view');
        Route::get('/create', 'AdminUniStoreController@create')->name('get_admin.uni_store.create')->middleware('permission:uni_store_create|full');
        Route::post('/create', 'AdminUniStoreController@store');
        Route::get('update/{id}', 'AdminUniStoreController@edit')->name('get_admin.uni_store.edit')->middleware('permission:uni_store_edit|full');
        Route::post('update/{id}', 'AdminUniStoreController@update');
        Route::get('update/{id?}', 'AdminUniStoreController@delete_album')->name('get_admin.uni_store.delete_album');
        Route::get('delete/{id}', 'AdminUniStoreController@delete')->name('get_admin.uni_store.delete')->middleware('permission:uni_store_delete|full');
    });
    Route::prefix('uni_flashsale')->group(function () {
        Route::get('/', 'AdminUniFlashSaleController@index')->name('get_admin.uni_flashsale.index')->middleware('permission:uni_flashsale_index|full');
        Route::get('/create', 'AdminUniFlashSaleController@create')->name('get_admin.uni_flashsale.create')->middleware('permission:uni_flashsale_create|full');
        Route::post('/create', 'AdminUniFlashSaleController@store');
        Route::post('edit/{id}', 'AdminUniFlashSaleController@edit_flash')->name('uni_flashsale.edit');
        Route::get('update/{id}', 'AdminUniFlashSaleController@edit')->name('get_admin.uni_flashsale.edit')->middleware('permission:uni_flashsale_edit|full');
        Route::post('update/{id}', 'AdminUniFlashSaleController@update');
        Route::get('delete/{id}', 'AdminUniFlashSaleController@delete')->name('get_admin.uni_flashsale.delete')->middleware('permission:uni_flashsale_delete|full');
    });
    Route::prefix('export')->group(function () {
        Route::get('file-import-export', 'UserExportController@fileImportExport')->name('fileImportExport');
        Route::get('file-export', 'UserExportController@fileExport')->name('file-export');
        Route::get('file-export-news', 'UserExportController@fileExportNews')->name('file-export-news');
        Route::get('file-export-review', 'UserExportController@fileExportReview')->name('file-export-review');
        Route::get('file-export-question', 'UserExportController@fileExportQuestion')->name('file-export-question');
    });


    require_once 'route_acl.php';
    require_once 'route_blog.php';
    require_once 'route_cart.php';
});

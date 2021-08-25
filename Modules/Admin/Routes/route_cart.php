
<?php

Route::prefix('uni_order')->namespace('Cart')->group(function (){
    Route::get('/', 'AdminUniOrderController@index')->name('get_admin.uni_order.index')->middleware('permission:uni_order_index|full');
    Route::get('trash', 'AdminUniOrderController@trash')->name('get_admin.uni_order.trash')->middleware('permission:uni_order_index|full');
    Route::get('trash/{idOrder}', 'AdminUniOrderController@movetrash')->name('get_admin.uni_order.movetrash')->middleware('permission:uni_order_delete|full');
    Route::get('delete/{idOrder}', 'AdminUniOrderController@delete')->name('get_admin.uni_order.delete')->middleware('permission:uni_order_delete|full');
    Route::get('/{idOrder}/edit', 'AdminUniOrderController@edit')->name('get_admin.uni_order.edit')->middleware('permission:uni_order_edit|full');
    Route::post('/search_ajax', 'AdminUniOrderController@search_ajax')->name('get_admin.uni_order.search_ajax');
    Route::post('/{idOrder}/edit', 'AdminUniOrderController@update')->middleware('permission:uni_order_edit|full');
});

Route::prefix('uni_spice_club')->namespace('Cart')->group(function (){
    Route::get('/', 'AdminOrderSpiceClubController@index')->name('get_admin.uni_spice_club.index')->middleware('permission:uni_spice_club_index|full');
    Route::get('trash', 'AdminOrderSpiceClubController@trash')->name('get_admin.uni_spice_club.trash')->middleware('permission:uni_spice_club_index|full');
    Route::get('trash/{idOrder}', 'AdminOrderSpiceClubController@movetrash')->name('get_admin.uni_spice_club.movetrash')->middleware('permission:uni_spice_club_delete|full');
    Route::get('delete/{idOrder}', 'AdminOrderSpiceClubController@delete')->name('get_admin.uni_spice_club.delete')->middleware('permission:uni_spice_club_delete|full');
    Route::get('/{idOrder}/edit', 'AdminOrderSpiceClubController@edit')->name('get_admin.uni_spice_club.edit')->middleware('permission:uni_spice_club_edit|full');
    Route::post('/{idOrder}/edit', 'AdminOrderSpiceClubController@update')->middleware('permission:uni_spice_club_edit|full');
});
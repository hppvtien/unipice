
<?php

Route::prefix('uni_order')->namespace('Cart')->group(function (){
    Route::get('/', 'AdminUniOrderController@index')->name('get_admin.uni_order.index')->middleware('permission:uni_order_index|full');
    Route::get('trash', 'AdminUniOrderController@trash')->name('get_admin.uni_order.trash')->middleware('permission:uni_order_index|full');
    Route::get('trash/{idOrder}', 'AdminUniOrderController@movetrash')->name('get_admin.uni_order.movetrash')->middleware('permission:uni_order_index|full');
    Route::get('delete/{idOrder}', 'AdminUniOrderController@delete')->name('get_admin.uni_order.delete')->middleware('permission:uni_order_index|full');
    Route::get('/{idOrder}/edit', 'AdminUniOrderController@edit')->name('get_admin.uni_order.edit')->middleware('permission:uni_order_edit|full');
    Route::post('/{idOrder}/edit', 'AdminUniOrderController@update')->middleware('permission:uni_order_edit|full');
});


<?php

Route::prefix('transaction')->namespace('Cart')->group(function (){
    Route::get('/', 'AdminTransactionController@index')->name('get_admin.transaction.index')->middleware('permission:transaction_index|full');
    Route::get('trash', 'AdminTransactionController@trash')->name('get_admin.transaction.trash')->middleware('permission:transaction_index|full');
    Route::get('trash/{idTransaction}', 'AdminTransactionController@movetrash')->name('get_admin.transaction.movetrash')->middleware('permission:transaction_index|full');
    Route::get('delete/{idTransaction}', 'AdminTransactionController@delete')->name('get_admin.transaction.delete')->middleware('permission:transaction_index|full');
    Route::get('/{idTransaction}/edit', 'AdminTransactionController@edit')->name('get_admin.transaction.edit')->middleware('permission:transaction_edit|full');
    Route::post('/{idTransaction}/edit', 'AdminTransactionController@update')->middleware('permission:transaction_edit|full');
});

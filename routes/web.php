<?php

// Resource routes  for warehouse
Route::group(['prefix' => set_route_guard('web').'/sales'], function () {
    Route::resource('warehouse', 'WarehouseResourceController');
});



// Resource routes  for status
Route::group(['prefix' => set_route_guard('web').'/sales'], function () {
    Route::resource('status', 'StatusResourceController');
});



// Resource routes  for quote
Route::group(['prefix' => set_route_guard('web').'/sales'], function () {
    Route::resource('quote', 'QuoteResourceController');
});



// Resource routes  for quote_item
Route::group(['prefix' => set_route_guard('web').'/sales'], function () {
    Route::resource('quote_item', 'QuoteItemResourceController');
});



// Resource routes  for order
Route::group(['prefix' => set_route_guard('web').'/sales'], function () {
    Route::resource('order', 'OrderResourceController');
});



// Resource routes  for order_item
Route::group(['prefix' => set_route_guard('web').'/sales'], function () {
    Route::resource('order_item', 'OrderItemResourceController');
});



// Resource routes  for transaction
Route::group(['prefix' => set_route_guard('web').'/sales'], function () {
    Route::resource('transaction', 'TransactionResourceController');
});



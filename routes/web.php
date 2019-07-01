<?php

Route::get('/', function () {
    return view('home');
})->name('landing');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/products', 'ProductController@index')->name('product');

Route::group(['prefix' => 'admin'], function () {

    Voyager::routes();
});

// cart routing
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::post('/cart/cancel', 'CartController@cancel')->name('cart.cancel');

// purchase routing
Route::group(['prefix' => '/purchase'], function () {
    Route::get('/', 'PurchaseController@index')->name('purchase.index');
    Route::post('/', 'PurchaseController@store')->name('purchase.store');
    Route::put('/review/{id}', 'PurchaseController@review')->name('purchase.review');
});

Route::get('product/view/{id}', 'ProductController@view')->name('view.product');

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

Route::get('/', function () {
    return view('dashboard');
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
});

Route::get('product/view/{id}', 'ProductController@view')->name('view.product');

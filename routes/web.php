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

Route::get('/products', function () {
    return view('sites.products');
})->name('product');

Route::get('/cart', function () {
    return view('sites.cart');
})->name('cart');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

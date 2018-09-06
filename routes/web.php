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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('homepage');
Route::get('/', 'Checkout@gettoken')->name('get.mainpage');
Route::post('/payment', 'Checkout@payment')->name('make.payment');
Route::get('/products', 'ProductsController@getproducts')->name('products');

Route::get('/product/{productID}', 'ProductsController@getproduct')->name('product');


Route::get('/test', function(){
	return view('test');
});

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
    return view('welcome');//home page
});

Route::prefix('api')->group(function () {
	Route::post('login','AuthController@authenticate');
    Route::get('produk', 'ProductController@index');
    Route::post('produk', 'ProductController@store');
    Route::get('produk/{id}', 'ProductController@getById');
    Route::put('produk/{id}', 'ProductController@update');
    Route::delete('produk/{id}', 'ProductController@destroy');
});

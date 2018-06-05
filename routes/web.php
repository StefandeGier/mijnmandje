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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/catergories/{id}', 'CatergoriesProductsController@index');

Route::get('/product/indexbycategory/{category_id}', 'ProductsController@indexByCategory');

Route::get('/product/{product_id}', 'ProductsController@view');

Route::post('/product/add', 'CartController@addShoppingCart');

Route::post('/cart/update', 'CartController@updateCart');

Route::get('/cart/delete/{product_id}', 'CartController@deleteItem');

Route::get('/cart', 'CartController@viewCart');

Route::get('/cart/checkout', 'OrdersController@setOrder')->middleware('auth');



//Route::get('/', 'CategoriesController@index')->name('welcome');

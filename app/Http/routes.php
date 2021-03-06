<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Login & Authentication
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Auth
// Route::controllers([
//   'auth' => 'Auth\AuthController',
//   'password' => 'Auth\PasswordController',
// ]);

//About
Route::get('about', 'PagesController@about');

//Poducts
Route::get('products', 'ProductController@index');
// Route::get('products', 'ProductController@showimage');
Route::get('products/create', 'ProductController@create');
Route::get('products/{id}', 'ProductController@show');
Route::post('products', 'ProductController@store');
Route::get('/products/{id}/edit', 'ProductController@edit');
Route::patch('/products/{id}', array('uses' => 'ProductController@update', 'as' => 'edit.product'));
Route::delete('produtcs/{id} ', array('uses' => 'ProductController@destroy', 'as' => 'mamma'));

//Wishlist
Route::get('/wishlist', 'WishListController@index');
Route::post('/wishlist', 'WishListController@index');
Route::get('/clear-wish', 'WishListController@clear_wish');
Route::delete('cart/{id} ', array('uses' => 'WishListController@removeWish', 'as' => 'delete.item'));

//Cart
Route::get('/cart', 'CartController@cart');
Route::post('/cart', 'CartController@cart');
Route::get('/clear-cart', 'CartController@clear_cart');
Route::delete('cart/{id} ', array('uses' => 'CartController@removeItem', 'as' => 'delete.item'));

//Search
Route::get('search-products', 'SearchController@index');
Route::get('admin-search', 'SearchController@search');

//Admin
Route::get('user', ['middleware' => ['auth', 'admin'], 'uses' => 'UsersController@index']);
Route::get('user/create', 'UsersController@create');
Route::post('user', 'UsersController@store');
Route::get('user/{id} ', 'UsersController@edit');
Route::patch('user/{id}/edit', array('uses' => 'UsersController@update', 'as' => 'edit.user'));
Route::delete('delete/{id} ', array('uses' => 'UsersController@destroy', 'as' => 'delete.user'));

//Order
Route::get('order', 'OrderController@index');
Route::post('proceed-to-payment', 'OrderController@order');

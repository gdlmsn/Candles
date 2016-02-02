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

//Auth
Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

// Registration
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//About
Route::get('about', 'PagesController@about');

//Poducts
Route::get('products', 'ProductController@index');
Route::get('products/create', 'ProductController@create');
Route::get('products/{id}', 'ProductController@show');
Route::post('products', 'ProductController@store');

//Cart
Route::post('/cart', 'CartController@cart');
Route::get('/clear-cart', 'CartController@clear_cart');
Route::post('/cart-remove-item', 'CartController@cart_remove_item');

//Search
Route::get('search-products', 'SearchController@index');

//Admin

Route::get('user', 'UsersController@index');
Route::get('user/create', 'UsersController@create');
Route::post('user', 'UsersController@store');
Route::get('user/{id} ', 'UsersController@edit');
Route::post('user/{id}/edit', array('uses' => 'UsersController@update', 'as' => 'edit.user'));
Route::delete('delete/{id} ',array('uses' => 'UsersController@destroy', 'as' => 'delete.user'));

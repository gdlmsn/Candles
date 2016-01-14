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


//Registration routes
//Route::get('auth/register', 'Auth\AuthController@getRegister');

//Route::post('thanks', 'Auth\AuthController@postRegister');

//Authentication routes

//Route::get('auth/login', 'Auth\AuthController@getLogin');
//Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//Route::get('login', array('as' => 'login', 'uses' => 'UsersController@login'));

//Route::post('login', array('uses' => 'UsersController@signin'));

//Route::get('login', 'UsersController@authenticate');



Route::get('about', 'PagesController@about');

Route::get('products', 'ProductController@index');

Route::get('products/create', 'ProductController@create');

Route::get('products/{id}', 'ProductController@show');

Route::post('products', 'ProductController@store');



//Route::get('products.show', 'ProductDetailsController@index');

//Route::get('products/{id}', array('as' =>'productdetails', 'uses' => 'ProductController@show'));

//Route::get('productdetails', 'ProductController@details');


//Auth
Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);


//Search

//Route::get('products', 'SearchController@index');

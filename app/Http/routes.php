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

Route::get('register', 'RegisterController@showRegister');


/*
Route::post('/register', function(){
   $user = new User;
   $user->email = Input::get('email');
   $user->username = Input::get('username');
   $user->password = Hash::make(Input::get('password'));
   $user->save();
   $theEmail = Input::get('email');
   return View::make('thanks')->with('theEmail', $theEmail);
});
*/

Route::get('login', array('as' => 'login', 'uses' => 'UsersController@login'));


Route::get('about', 'PagesController@about');

Route::get('products', 'ProductController@index');

//Route::get('products', 'ProductController@display');

Route::get('products/{id}', 'ProductController@show');

//Route::get('products/{id}', array('as' =>'productdetails', 'uses' => 'ProductController@show'));

//Route::get('productdetails', 'ProductController@details');

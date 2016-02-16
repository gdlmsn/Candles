<?php

namespace App\Http\Controllers;
use App\Checkout;
use App\Checkout_Items;
use App\Product;
use DB;
use Input;
use Hash;
use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Redirect;

class UsersController extends Controller
{
    public function index()
    {
       $products = Product::all();
       $users = User::all();
       $checkouts = Checkout::all();
       $checkout_items = Checkout_Items::all();
        return view ('user.index',compact('users', 'products','checkouts', 'checkout_items'));
    }

    public function create()
    {
      return view('user.create');
    }

     public function store(Request $request)
     {
       $this->validate($request, [  'username' => 'required|max:255|min:4|unique:users',
                                    'email' => 'required|email|max:255|unique:users',
                                    'password' => 'required|confirmed|min:6'
                                  ]);

       $user = new User;
       $user->username = Input::get('username');
       $user->email = Input::get('email');
       $user->password = Hash::make(Input::get('password'));
       $user->save();

       return redirect ('user');

     }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
      $user = User::find($id);

      return view ('user.edit', compact('user'));
    }



    public function update(Request $request, $id)
    {
      $this->validate($request, [ 'username' => 'required|max:255|min:4|unique:users',
                                  'email' => 'required|email|max:255|unique:users',
                                  'password' => 'required|confirmed|min:6'
                                ]);

      $user = User::findOrFail($id);
      $user->username = Input::get('username');
      $user->email = Input::get('email');
      $user->password = Hash::make(Input::get('password'));
      $user->save();

      return redirect ('/user');
    }

    public function destroy($id)
    {
      User::destroy($id);

		  return redirect ('/user');
    }
}

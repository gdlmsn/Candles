<?php

namespace App\Http\Controllers;



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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function getFullName()
	  {
		    return $this->username;
	  }

     public function __construct()
	    {
		      $this->beforeFilter('auth');
	   }

    public function index()
    {
        $users = User::all();
        return view ('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('user.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

       return Redirect::to('/user');
     }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        //
    }

    public function showProfile(Request $request, $id)
   {
       //$value = $request->session()->get('key');

       //
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
      $user = User::find($id);

      return view ('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [ 'username' => 'required|max:255|min:4|unique:users',
                                  'email' => 'required|email|max:255|unique:users',
                                  'password' => 'required|confirmed|min:6'
                                ]);

      $user = User::find($id);

      $user->username = Input::get('username');
      $user->email = Input::get('email');
      $user->password = Hash::make(Input::get('password'));
      $user->save();

      return Redirect::to('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      User::destroy($id);

		  return Redirect::to('/user');
    }



}

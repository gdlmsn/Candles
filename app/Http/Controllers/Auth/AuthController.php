<?php
namespace App\Http\Controllers\Auth;
use App\User;
use Illuminate\Contracts\Auth\Guard;
use Input;
use Hash;
use Auth;
use Session;
use Validator;
use App\Http\Requests;
use Illuminate\Http\Request;
use Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

  //    public function __construct(Guard $auth, User $user)
  //  {
  //      $this->user = $user;
  //      $this->auth = $auth;
   //
  //      $this->middleware('guest', ['except' => ['getLogout']]);
  //  }
    public function __construct(Guard $auth, User $user)
    {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
   protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

      protected $redirectPath = '/';
    protected $loginPath = 'login';


    /*Get Register Page*/

    public function getRegister() {

      $text = [];
      $text ['welcome'] = 'Welcome to the Candle Lab';
      $text ['useregistration'] = 'New User Registration';
      return view ('auth.register',  $text);
    }


    /*Register user to DB function*/

    public function postRegister(Request $request)
    {
        $this->validate($request, [
          'username' => 'required|min:3',
          'email' =>'required',
          'password'=>'required'
        ]);

        $user = new User;
        $user->username = Input::get('username');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        $theUsername = Input::get('username');
        return view ('auth.login', compact('theUsername'));
    }

    public function getLogout(){
          Auth::logout();
          Session::flush();
          return Redirect::to('/');
      }






    public function postLogin(Request $request){

        $this->validate($request, [
          'email' => 'required',
          'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
      //  $theUser = Input::get('email');

        if ($this->auth->attempt($credentials, $request->has('remember'))) {
           // Authentication passed...
           return redirect()->intended($this->redirectPath());
    }
    return redirect('/auth/login')
    ->withInput($request->only('email'))
    ->withErrors([
      'email' => 'These Credentials do not match our records'
    ]);
  }














}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
  public function showRegister() {

    $text = [];
    $text ['welcome'] = 'Welcome to the Candle Lab';
    $text ['useregistration'] = 'New User Registration';


    return view ('pages.register', $text);
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about(){
      //passing an array of data
      $about = [];
      $about ['welcome'] = 'This is our about page';
      $about ['aboutus'] = 'This is about me';
       return view ('pages.about', $about);
    }

    //OR Loading the View (in this case an array.) welcome &about us are the variables$
/*
      return view('pages.about')->with([
      'welcome'=> 'This is our about page',
      'aboutus'=> 'This is about me'
      ]);
      */

      //OR use compact version

/*
      $first = 'Fox';
      $last = 'Mulder';

      return view('pages.about', compact('first', 'last'));



*/
}

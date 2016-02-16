<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\User;
use App\Product;
use App\Checkout_Items;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index()
    {
      $query = \Request::get('q');
      // if(!$query && $query == '') return Response::json(array(), 400);
      $products = Product::where('name','like','%'.$query.'%')
			->paginate(10);
    }

    public function search()
    {
       if (Input::has('q-admin')){
      $query = \Request::get('q-admin');
      $users = User::where('username','like','%'.$query.'%')
      ->paginate(10);

      return view('user.usearch',compact('users'));

      }elseif (Input::has('q-p-admin')) {
       $query = \Request::get('q-p-admin');
       $products = Product::where('name','like','%'.$query.'%')
      ->paginate(10);

      return view('user.psearch',compact('products'));

      }elseif (Input::has('q-o-admin')){
      $query = \Request::get('q-o-admin');
      $checkout_items = Checkout_Items::where('order_id','like','%'.$query.'%')
      ->paginate(10);

      return view('user.osearch',compact('checkout_items'));
      }
    }


    public function searchproducts()
    {
      $query = \Request::get('q-p-admin');
      $products = Product::where('name','like','%'.$query.'%')
      ->paginate(10);

      return view('user.psearch',compact('products'));
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

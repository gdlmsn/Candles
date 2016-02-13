<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Cart;
use App\Product;

class CartController extends Controller
{
    /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function __construct()
     {
         $this->middleware('auth');
     }

    public function cart()
    {
        if (Request::isMethod('post')) {
            $id = Request::get('id');
            $product = Product::find($id);
            Cart::add(array('id' => $id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price));


      //Decrease
      if (Request::get('id') && (Request::get('increment')) == 1) {
          $rowId = Cart::search(array('id' => Request::get('id')));
          $item = Cart::get($rowId[0]);

          Cart::update($rowId[0], $item->qty + 1);
      }

      //Increase
       if (Request::get('id') && (Request::get('decrease')) == 1) {
           $rowId = Cart::search(array('id' => Request::get('id')));
           $item = Cart::get($rowId[0]);

           Cart::update($rowId[0], $item->qty - 1);
       }

            $cart = Cart::content();

            return view('cart.index', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
        }
        $cart = Cart::content();

        return view('cart.index', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }

    public function clear_cart()
    {
        Cart::destroy();

        return Redirect::away('cart');
    }

    // public function destroy($id)
    // {
    //     Cart::destroy();
    // }

    public function removeItem($rowId)
    {
        $cart = Cart::content();
      echo "\n hhh ".$cart;
        if ($rowId != null) {
          //Cart::remove(trim($rowId));


        }
        // return Redirect::away('/');

    }
}

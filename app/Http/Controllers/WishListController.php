<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Cart;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WishListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      if (Request::isMethod('post')) {
        $id = Request::get('id');
        $product = Product::find($id);
        Cart::instance('wishlist')->add(array('id' => $id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price));

        $wishlist = Cart::instance('wishlist')->content();

        return view('wishlist.index', array('wishlist' => $wishlist, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }
      $wishlist  = Cart::instance('wishlist')->content();

    return view('wishlist.index', array('wishlist' => $wishlist, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }

    public function clear_wish()
    {
        Cart::instance('wishlist')->destroy();
        return Redirect::away('wishlist');
    }

    public function removeWish($rowId)
    {
        $wishlist = Cart::instance('wishlist')->content();
      //  echo "\n hhh ".$wishlist;
        if ($rowId != null) {
          Cart::instance('wishlist')->remove(trim($rowId));
        }
        return redirect('wishlist');
    }
  }

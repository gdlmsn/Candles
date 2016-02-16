<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Cart;
use App\Checkout;
use App\Checkout_Items;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{

    public function index()
    {
      $cart = Cart::content();
        return view ('order.index', compact('cart'));
    }

    public function order()
    {

          $cart = Cart::content();
          $total = Cart::total();
          $orders = new Checkout;
          $orders->subtotal = $total;
          $orders->save();
          $orderid = Checkout::all()->last()->order_id;
          // echo $cart;

          foreach ($cart as $item) {
            // echo $item;
            $checkout_item = new Checkout_Items;
            $checkout_item->order_id = $orderid;
            $checkout_item->product_id = $item->id;
            $checkout_item->qty = $item->qty;
            $checkout_item->save();


      }
        Cart::destroy();

        \Session::flash('flash_message', 'Your order has been placed successfully!');

          return redirect('/');
    }



    public function create()
    {
        //
    }


    public function store(Request $request)
    {


    }


    public function show($id)
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

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
    }



    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

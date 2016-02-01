<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Cart;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

     public function cart()
    {
      if (Request::isMethod('post')) {
          $id = Request::get('id');
          $product = Product::find($id);
          Cart::add(array('id' => $id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price));


    //   //Decrease
    //   if (Request::get('id') && (Request::get('increment')) == 1) {
    //    $rowId = Cart::search(array('id' => Request::get('id')));
    //    $item = Cart::get($rowId[0]);
     //
    //    Cart::update($rowId[0], $item->qty + 1);
    //  }
     //
    //   //Increase
    //    if (Request::get('id') && (Request::get('decrease')) == 1) {
    //     $rowId = Cart::search(array('id' => Request::get('id')));
    //     $item = Cart::get($rowId[0]);
     //
    //     Cart::update($rowId[0], $item->qty - 1);
    //     }


      $cart = Cart::content();

      return view('cart.index', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));


    }
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        Cart::destroy();
    }


    public function remove($id)
    {
      $rowId = Cart::search(array('id' => Request::get('id')));
      Cart::remove($rowId[0]);
    }
}

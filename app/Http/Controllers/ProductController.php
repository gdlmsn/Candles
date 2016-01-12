<?php

namespace App\Http\Controllers;
use Input;
use DB;
use Illuminate\Http\Request;
use App\Fragrance;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //  $products = DB::table('products')->get();
    //  return view ('pages.products', ['products' => $products]);
    $products = Product::all();
    return view('products.index', compact('products'));
    }

  /*  public function details()
    {
       return view ('pages.productdetails');
    }
    */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


      //**********************DISPLAY ALL FRAGRANCES IN show.blade.php************************************

    public function display(){

       $pt = Fragrance::all();
       return view('products.show', compact('pt'));
     }


    public function create()
    {
      return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validate($request, [ 'name' => 'required|min:3', 'stock' => 'required', 'price' => 'required', 'special_price' => 'required',
                                  'weight' => 'required', 'size' => 'required', 'description' => 'required|min:6']);
      $product = new Product;
      $product->name = Input::get('name');
      $product->stock = Input::get('stock');
      $product->price = Input::get('price');
      $product->special_price = Input::get('special_price');
      $product->weight = Input::get('weight');
      $product->size = Input::get('size');
      $product->description = Input::get('description');
      $product->save();
      return redirect ('products');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //CREATE PRODUCT
    public function show($id)
    {
    // $products = DB::table('products')->where('id','=',$id);
    //  return view ('pages.productdetails',[ 'productdetails' => $productz]);
      $product = Product::findOrFail($id);

      //dd returns null in case there is no product under that id or returns the product details otherwise.
      //dd($product);

      return view('products.show', compact('product'));
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

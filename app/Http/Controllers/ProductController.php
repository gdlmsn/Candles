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
    public function index()
    {
    $products = Product::all();

    return view('products.index', compact('products'));
    }

    public function create()
    {
      return view('products.create');
    }

    public function store(Request $request)
    {

      $this->validate($request, [ 'name' => 'required|min:3', 'stock' => 'required|numeric|min:1', 'price' => 'required|numeric|min:2', 'special_price' => 'required|numeric|min:2',
                                  'weight' => 'required|numeric|min:1', 'size' => 'required|min:3', 'description' => 'required|min:6']);
      $product = new Product;
      $product->name = Input::get('name');
      $product->stock = Input::get('stock');
      $product->price = Input::get('price');
      $product->special_price = Input::get('special_price');
      $product->weight = Input::get('weight');
      $product->size = Input::get('size');
      $product->description = Input::get('description');
      $product->save();

      \Session::flash('flash_message', 'Product Successfully created!');

      return redirect ('user');
    }


    public function show($id)
    {

      $product = Product::findOrFail($id);

      //dd returns null in case there is no product under that id or returns the product details otherwise.
      //dd($product);

      return view('products.show', compact('product'));
    }

    public function edit($id)
    {
      $product = Product::find($id);

      return view ('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [ 'name' => 'required|min:3', 'stock' => 'required|numeric|min:1', 'price' => 'required|numeric|min:2', 'special_price' => 'required|numeric|min:2',
                                  'weight' => 'required|numeric|min:1', 'size' => 'required|min:3', 'description' => 'required|min:6']);

      $product = Product::findOrFail($id);
      $product->name = Input::get('name');
      $product->stock = Input::get('stock');
      $product->price = Input::get('price');
      $product->special_price = Input::get('special_price');
      $product->weight = Input::get('weight');
      $product->size = Input::get('size');
      $product->description = Input::get('description');
      $product->save();

        \Session::flash('flash_message', 'Product Successfully updated!');

      return redirect ('/user');
    }

    public function destroy($id)
    {
      Product::destroy($id);

      \Session::flash('flash_message', 'Product Successfully deleted!');

      return redirect ('/user');
    }



}

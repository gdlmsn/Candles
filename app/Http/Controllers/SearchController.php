<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\User;
use App\Product;
use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  //  public function appendValue($data, $type, $element)
  //   {
  //   	// operate on the item passed by reference, adding the element and type
  //   	foreach ($data as $key => & $item) {
  //   		$item[$element] = $type;
  //   	}
  //   	return $data;
  //   }
   //
  //   public function appendURL($data, $prefix)
  //   {
  //   	// operate on the item passed by reference, adding the url based on slug
  //   	foreach ($data as $key => & $item) {
  //   		$item['url'] = url($prefix.'/'.$item['slug']);
  //   	}
  //   	return $data;
  //   }

    public function index()
    {
      $query = \Request::get('q');
      // if(!$query && $query == '') return Response::json(array(), 400);

      $products = Product::where('name','like','%'.$query.'%')
			->paginate(10);


	    return view('products.index',compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
      $query = \Request::get('q-admin');
      $users = User::where('id','like','%'.$query.'%')and
      $users = User::where('username','like','%'.$query.'%')

      ->paginate(10);


      return view('user.usearch',compact('users'));
    }

    public function searchproducts()
    {
      $query = \Request::get('q-p-admin');

      $products = Product::where('name','like','%'.$query.'%')

      ->paginate(10);


      return view('user.psearch',compact('products'));
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

@extends('app')

@section('nav')
@stop

@section('content')
<div class="container">
  <h1 class="title text-center">Administrator</h1>
<div class="col-lg-10 col-lg-offset-1">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-3 pull-right">
          {!! Form::open(['method'=>'GET','url'=>'psearch','class'=>'navbar-form navbar-right','role'=>'search'])  !!}
          <div class="input-group custom-search-form">
            <input type="text" class="form-control" name="q-p-admin" placeholder="Search..." id="search">
            <span class="input-group-btn">
            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </span>
          </div>
          {!! Form::close() !!}
      </div>
    </div>
  </div>

  <h2 class="title text-center">Users Panel</h2>
  <div class="table-responsive">
      <table class="table table-bordered table-striped">

              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Stock</th>
                      <th>Price</th>
                      <th>Special</th>
                      <th>Weight</th>

                      <th>Description</th>
                      <th>Edit/Delete</th>
                  </tr>
              </thead>

              <tbody>
                  @foreach ($products as $product)
                  <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->special_price }}</td>
                    <td>{{ $product->weight }}</td>
                    <td>{{ $product->description }}</td>

                            <td>

                                <a href="{{ action('ProductController@edit',[$product->id]) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                                {!! Form::open(['route' => ['mamma', $product->id], 'method' => 'DELETE']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                  </tr>
                  @endforeach
              </tbody>

          </table>
      </div>

      <a href="/products/create" class="btn btn-success pull-right">Add Product</a><br>
    <br>
    <br>
    </div>
  </div>
    @stop

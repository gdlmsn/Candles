@extends('app')

@section('nav')
@stop

@section('content')

<div class="container">
  <h1 class="title text-center">Administrator</h1>

  <div class="col-lg-10 col-lg-offset-1">


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
                @if (count($products) === 0)
                echo   <h1 class="title text-center">Stronzo</h1>;
                 @elseif (count($products) >= 1)
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
                @endif
            </tbody>

        </table>
    </div>

    <a href="/products/create" class="btn btn-success pull-right">Add Product</a>
    <a href="{{url('user')}}" class="btn btn-info pull-right" style="margin-right: 3px;">Back</a>
    <br>
  <br>
  <br>
  </div>
  </div>
  @stop

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
                  <th>Order ID</th>
                  <th>Product ID</th>
                  <th>Quantity</th>
                  <th>Details</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($checkout_items as $checkout_item)
                <tr>
                  <td>{{ $checkout_item->order_id }}</td>
                  <td>{{ $checkout_item->product_id }}</td>
                  <td>{{ $checkout_item->qty}}</td>
                          <td>
                              <a href="" class="btn btn-info pull-left" style="margin-right: 3px;">Details</a>
                          </td>
                </tr>
                @endforeach

            </tbody>

        </table>
    </div>

    <a href="" class="btn btn-success pull-right">Add Product</a>
    <a href="{{url('user')}}" class="btn btn-info pull-right" style="margin-right: 3px;">Back</a>
    <br>
  <br>
  <br>
  </div>
  </div>
  @stop

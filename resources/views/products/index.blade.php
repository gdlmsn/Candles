@extends('app')

    @section('nav')



    @stop

    @section('content')

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-3 pull-right">
            {!! Form::open(['method'=>'GET','url'=>'search-products','class'=>'navbar-form navbar-right','role'=>'search'])  !!}
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" name="q" placeholder="Search..." id="search">
              <span class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
              </span>
            </div>
            {!! Form::close() !!}
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <h2 class="title text-center">Products</h2>
          </hr>
            @foreach($products as $products)
            <div class="col-sm-3">
              <div class="product-image-wrapper">
                <div class="single-products">
                  <div class="productinfo text-center">
                    <div class="thumbnail th1">
                      {!! Html::image('img/01-main1.png') !!}
                        <a href="{{ action('ProductController@show',[$products->id]) }}"><i class="fa fa-info"></i>Product Details</a>
                          <form method="POST" action="{{url('cart')}}">
                            <input type="hidden" name="id" value="{{$products->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-fefault add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                          </form>
                          <div class="caption">
                            <p>{{ $products->name }}</p>
                            <hr/>
                            <p>{{ $products->price }} $</p>
                          </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    @stop

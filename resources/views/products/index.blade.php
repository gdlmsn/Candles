@extends('app')

    @section('nav')

    <div class="col-sm-3 col-md-3 pull-right">
        <form class="navbar-form navbar-left" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q" id="srch-input">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
      </div>

    @stop

    @section('content')
      <div class="container">

          <h2 class="title text-center">Products</h2>
             @foreach($products as $products)
             <div class="row">
               <div class="col-sm-9 padding-right">
                 <div class="col-sm-4">
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
                </div>
              @endforeach
        </div>
      </div>
      </section>
@stop

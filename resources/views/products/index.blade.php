@extends('app')

    @section('nav')
    <ul class="nav navbar-nav navbar-right">
      <li><a href="">Home</a></li>
      <li><a href="">Shop</a></li>
      <li><a href="#care_sec">Care</a></li>
      <li><a href="#about_sec">About</a></li>
    </ul>

    <div class="col-sm-3 col-md-3 pull-right">
        <form class="navbar-form" role="search">
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
    <h1>Products</h1>

    @foreach($products as $products)
    <article>
    <div class="container">
          <div class="bs-example" data-example-id="thumbnails-with-custom-content">
           <div class="row">
             <div class="col-xs-3 col-sm-3 col-md-3">
               <div class="product-image-wrapper">
               <div class="thumbnail th1">
                  {!! Html::image('img/01-main1.png') !!}
                 <a href="{{ action('ProductController@show',[$products->id]) }}"><i class="fa fa-info"></i>Product Details</a>
                 <a href="{{url('cart')}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                  <div class="caption">
                    <p>{{ $products->name }}</p>
                    <hr/>
                    <p>{{ $products->price }} $
                     </p>
                  </div>
              </div>
              </div>
            </div>
          </div>
          </div>
          </div>
    </article>
    @endforeach

    <script type="text/javascript">
        var root = '{{url("/")}}';
    </script>
    <script>
    	$(document).ready(function(){
    	    $('#srch-input').selectize();
    	});
    </script>

    @stop

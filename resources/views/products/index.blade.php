@extends('app')

    @section('nav')
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#home_sec">Home</a></li>
      <li><a href="#shop_sec">Shop</a></li>
      <li><a href="#care_sec">Care</a></li>
      <li><a href="#about_sec">About</a></li>
    </ul>


    @stop

    @section('content')
    <h1>Products</h1>

    @foreach($products as $products)
    <article>
    <div class="container-fluid">
        <div class="bs-example" data-example-id="thumbnails-with-custom-content">
           <div class="row">
             <div class="col-xs-4 col-sm-4 col-md-4">
               <div class="thumbnail th1">
                 <a href="{{ action('ProductController@show',[$products->id]) }}">
                   {!! Html::image('img/01-main1.png') !!}
                  <div class="caption">
                    <p>{{ $products->name }}</p>
                    <hr/>
                    <p>{{ $products->price }} </p>
                    </a>
                  </div>
              </div>
            </div>
          </div>
          </div>
          </div>
    </article>
    @endforeach

    @stop

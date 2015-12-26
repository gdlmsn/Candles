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
<div class="container-fluid">
  <div class="bs-example" data-example-id="thumbnails-with-custom-content">
     <div class="row">
       <div class="col-xs-4 col-sm-4 col-md-4">
         <div class="thumbnail th1">
           <a href="{{ action("ProductController@index") }}">
             {!! Html::image('img/01-main1.png') !!}
            <div class="caption">
              <h3>Soy</h3>
              <h3>Tealight Candle</h3>
              <hr/>
              <p>20$</p>
              </a>
            </div>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="thumbnail th1">
          <a href="{{ action("ProductController@index") }}">
            {!! Html::image('img/01-main1.png') !!}
           <div class="caption">
             <h3>Soy</h3>
             <h3>Tealight Candle</h3>
             <hr/>
             <p>23$</p>
            </a>

           </div>
       </div>
     </div>
      <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="thumbnail th1">
          <a href="{{ action("ProductController@index") }}">
           {!! Html::image('img/01-main1.png') !!}
           <div class="caption">
              <h3>Soy</h3>
              <h3>Tealight Candle</h3>
              <hr/>
              <p>22$</p>
              </a>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bs-example" data-example-id="thumbnails-with-custom-content">
     <div class="row">
       <div class="col-xs-4 col-sm-4 col-md-4">
         <div class="thumbnail th1">
           <a href="{{ action("ProductController@index") }}">
             {!! Html::image('img/01-main1.png') !!}
            <div class="caption">
              <h3>Soy</h3>
              <h3>Tealight Candle</h3>
              <hr/>
              <p>20$</p>
              </a>
            </div>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="thumbnail th1">
          <a href="{{ action("ProductController@index") }}">
            {!! Html::image('img/01-main1.png') !!}
           <div class="caption">
             <h3>Soy</h3>
             <h3>Tealight Candle</h3>
             <hr/>
             <p>23$</p>
            </a>

           </div>
       </div>
     </div>
      <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="thumbnail th1">
          <a href="{{ action("ProductController@index") }}">
           {!! Html::image('img/01-main1.png') !!}
           <div class="caption">
              <h3>Soy</h3>
              <h3>Tealight Candle</h3>
              <hr/>
              <p>22$</p>
              </a>
            </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bs-example" data-example-id="thumbnails-with-custom-content">
     <div class="row">
       <div class="col-xs-4 col-sm-4 col-md-4">
         <div class="thumbnail th1">
           <a href="{{ action("ProductController@index") }}">
             {!! Html::image('img/01-main1.png') !!}
            <div class="caption">
              <h3>Soy</h3>
              <h3>Tealight Candle</h3>
              <hr/>
              <p>20$</p>
              </a>
            </div>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="thumbnail th1">
          <a href="{{ action("ProductController@index") }}">
            {!! Html::image('img/01-main1.png') !!}
           <div class="caption">
             <h3>Soy</h3>
             <h3>Tealight Candle</h3>
             <hr/>
             <p>23$</p>
            </a>

           </div>
       </div>
     </div>
      <div class="col-xs-4 col-sm-4 col-md-4">
        <div class="thumbnail th1">
          <a href="{{ action("ProductController@index") }}">
           {!! Html::image('img/01-main1.png') !!}
           <div class="caption">
              <h3>Soy</h3>
              <h3>Tealight Candle</h3>
              <hr/>
              <p>22$</p>
              </a>
            </div>
        </div>
      </div>
    </div>
  </div>

</div>

    @stop

@extends('app')


    @section('nav')


    @stop

    @section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      {!! Html::image('img/a.jpg') !!}
    </div>

    <div class="item">
      {!! Html::image('img/b.jpg') !!}
    </div>

    <div class="item">
      {!! Html::image('img/c.jpg') !!}
    </div>

    <div class="item">
      {!! Html::image('img/01-main1.png') !!}
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--THUMBNAIL SECTION-->

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

      <!--CARE SECTION-->
      <div class="jumbotron jumbotron-fluid jumbo">
        <div id="care_sec" class="container-fluid care">
          <h3 class="display-3">{Candle Care}</h3>
            <p class="lead">Please follow these simple steps to ensure that you make the most of your LUKA candle each and every time.</p>
            <p class="lead">Step1, Trim the wick to 2mm before each use.</p>
            <p class="lead">Step2, After your first burn- you can do this by simply pinching and pulling away any excess charred wick.</p>
            <p class="lead">Step3, Be sure to remove any wick trimmings from the surface of the candle prior to lighting.</p>
            <p class="lead">Step4, Burn your LUKA candle for 3-4 hours at a time ensuring the wax has liquefied across the surface to the sides of the jar.</p>
            <p class="lead">Some wax discolouration may occur after lighting your LUKA candle.
                        This is due to the natural and raw ingredients in your LUKA candle and is perfectly normal.
                  When lit you will hear the soothing sound of the wood wick gently crackling. This is natural and part of a LUKA candle's charm.</p>
        </div>
      </div>

<!--About Section-->
<div id="about_sec" class="cointainer-fluid about">
   {!! Html::image('img/02-thumb.png') !!}
  <p class="lead">
      LUKA candles are a luxurious and personal expression of Chloe's appreciation of the therapeutic and mood altering properties of essential oils and certain fragrances,
       the effects of which are further enhanced by the ambient warm glow of candlelight. Every divinely distinctive Luka candle is made of 100% pure eco soy wax which is
       scented with premium quality fragrance oils sourced from around the world to create a unique and blissful sensory experience.
       LUKA candles burn cleanly and evenly every time and feature long-lasting wood wicks which allow for easy lighting, no smoking during the burning cycle.
       Whether your desire is to relax and rejuvenate the senses, to set the mood, create energy, calm or passion or to increase sensuality, LUKA candles can do all
       this while simultaneously making a perfect decorator addition to any room in your home.
  </p>
</div>

@stop
@section('footer')
@stop

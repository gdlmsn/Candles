@extends('app')

    @section('nav')
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#home_sec">Home</a></li>
      <li><a href="#shop_sec">Shop</a></li>
      <li><a href="#care_sec">Care</a></li>
      <li><a href="#about_sec">About</a></li>
      <li><a href="#">WishList</a></li>
    @stop

    @section('content')
    <div class="container-fluid main">
      <div class="pds" data-example-id="thumbnails-with-custom-content">
       <div class="row">

         <div class="col-md-6">


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
      </div>
      <!--Description-------------->
      <div class="col-md-6">
        <div class="container-fluid description">
          <h3>{{ $product->name }}</h3>
          <h4>{{ $product->price }} $</h4>
          <hr/>
          <p>  {{ $product->description }}</p>
          <h5>

          </h5>

          <h4>Fragrances</h4>

          <select class="form-control">

          <option></option>
          </select>


          <div class="row">
            <div class="col-md-2">
              <h4>Qty</h4>
            </div>
          <div class="col-md-2">
            <select class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            </select>
          </div>
          <div class="col-md-2">
           <button type="button" class="btn btn-default">Add to cart</button>
        </div>
        </div>
        <hr/>
        <h5><a href="#">Add to wish list</a></h5>
        <h5><a href="#">Share</a></h5>
        </div>

      </div>

      </div>
    </div>
  </div>
  @stop
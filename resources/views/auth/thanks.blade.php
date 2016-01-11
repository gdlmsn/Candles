@extends('app')

    @section('nav')
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#home_sec">Home</a></li>
      <li><a href="#shop_sec">Shop</a></li>
      <li><a href="#care_sec">Care</a></li>
      <li><a href="#about_sec">About</a></li>


    @stop

    @section('content')

        <div class="title"></div>
        <div class="highlight"></div>

        <hr/>
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-4">
              <h2>thanks for registering</h2>
              <p>
                You've registered {{ $theUsername }}.
              </p>
        </div>
      </div>
    </div>
    @stop

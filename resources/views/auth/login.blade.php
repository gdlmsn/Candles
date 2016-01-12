@extends('app')

    @section('nav')

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#home_sec">Home</a></li>
      <li><a href="#shop_sec">Shop</a></li>
      <li><a href="#care_sec">Care</a></li>
      <li><a href="#about_sec">About</a></li>
      <li><a href="#">WishList</a></li>
    </ul>

    @stop

    @section('content')
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-4">
            {!! Form::open(array('url' => 'login', 'method' => 'post')) !!}


            <div class="form-group">
            {!! Form::label('email','Email') !!}
            {!! Form::text('email', Input::old('email'), array('class' => 'form-control')) !!}
            </div>

            <div class="form-group">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password', array('class' => 'form-control')) !!}
            </div>

            <div class="form-group">
            {!! Form::submit('Login', array('class' => 'btn btn-primary')) !!} <a href="#">Forgot your Password?</a>
            </div>
            {!! Form::close() !!}

          <div class="non-member">
        <a href="{{ action("Auth\AuthController@getRegister") }}">Not a member? Sign-up!</a>
          </div>
        </div>
      </div>
    </div>
    @stop

@extends('app')

    @section('nav')
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#home_sec">Home</a></li>
      <li><a href="#shop_sec">Shop</a></li>
      <li><a href="#care_sec">Care</a></li>
      <li><a href="#about_sec">About</a></li>


    @stop

    @section('content')

        <div class="title">{{ $welcome }}</div>
        <div class="highlight">{{ $useregistration }}</div>

        <hr/>
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-4">

        {!! Form::open(array('url'=>'registered')) !!}

            <div class="form-group">
            {!! Form::label('email','Email Address') !!}
            {!! Form::text('email', null, ['class' => ' form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('username','Username') !!}
            {!! Form::text('username', null, ['class' => ' form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::label('password',' Password') !!}
            {!! Form::password('password', ['class' => ' form-control']) !!}
            </div>

            <div class="form-group">
            {!! Form::submit('Sign up', ['class' => 'btn btn-primary form-control']) !!}
            </div>

        {!! Form::close() !!}

        </div>
      </div>
    </div>
    @stop

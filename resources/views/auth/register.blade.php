@extends('app')

    @section('nav')
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#home_sec">Home</a></li>
      <li><a href="#shop_sec">Shop</a></li>
      <li><a href="#care_sec">Care</a></li>
      <li><a href="#about_sec">About</a></li>


    @stop

    @section('content')


        <hr/>
           <div class="container-fluid">

        <div class="row">
            <div class="col-md-4">

            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}

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

        @if ($errors->any())
        <ul class="alert alert-danger">
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
        @endif

      <!--     <form method="POST" action="/auth/register">
            {!! csrf_field() !!}

            <div>
                Name
                <input type="text" name="name" value="{{ old('name') }}">
            </div>

            <div>
                Email
                <input type="email" name="email" value="{{ old('email') }}">
            </div>

            <div>
                Password
                <input type="password" name="password">
            </div>

            <div>
                Confirm Password
                <input type="password" name="password_confirmation">
            </div>

            <div>
                <button type="submit">Register</button>
            </div>
        </form>-->

        </div>
      </div>
    </div>
    @stop

@extends('app')

  
    @section('content')
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-4">

          <form method="POST" action="/auth/login">
               {!! csrf_field() !!}


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

            @if ($errors->any())
            <ul class="alert alert-danger">
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif
<!--
            <form method="POST" action="/auth/login">
                 {!! csrf_field() !!}

                <div class="form-group">
                    Email
                    <input type="email" name="email" value="{{ old('email'), array('class' => 'form-control') }}">
                </div>

                <div class="form-group">
                    Password
                    <input type="password" name="password" id="password">
                </div>

                <div class="form-group">
                    <input type="checkbox" name="remember"> Remember Me
                </div>

                <div class="form-group">
                    <button type="submit">Login</button>
                </div>
            </form>-->
          </hr>
            <div class="non-member">
            <a href="{{ action("Auth\AuthController@getRegister") }}">Not a member? Sign-up!</a>
            </div>
        </div>
      </div>
    </div>
    @stop

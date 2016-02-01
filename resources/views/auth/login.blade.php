@extends('app')


    @section('content')
      <div class="container-fluid">
        <h2 class="title text-center">Login</h2>

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
          </hr>
            <div class="non-member">
            <a href="{{ action("Auth\AuthController@getRegister") }}">Not a member? Sign-up!</a>
            </div>
        </div>
      </div>
    </div>
    @stop

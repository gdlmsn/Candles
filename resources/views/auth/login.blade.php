@extends('app')


    @section('content')
      <div class="container-fluid">

        <h1 class="title text-center">Login</h1>
        <hr>

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

            @if ($errors->has())
             @foreach ($errors->all() as $error)
                 <div class='bg-danger alert'>{{ $error }}</div>
             @endforeach
             @endif
          <br>
            <div class="non-member">
            <a href="{{ action("Auth\AuthController@getRegister") }}" class="btn btn-info pull-left" style="margin-right: 3px;">Not a member? Sign-up!</a>
            </div>
            <br><br>
            <br><br>
        </div>
      </div>
    </div>
    @stop

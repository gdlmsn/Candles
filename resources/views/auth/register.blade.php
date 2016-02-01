@extends('app')

    @section('nav')
    @stop

    @section('content')


        <hr/>
           <div class="container-fluid">
             <h2 class="title text-center">Register</h2>
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

      </div>
      </div>
    </div>
    @stop

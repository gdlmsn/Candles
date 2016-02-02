@extends('app')

    @section('nav')

    @stop

    @section('content')

    <h1>Create New User</h1>

    </hr>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          {!! Form::open(array('url' => '/user', 'method' => 'post')) !!}


          <div class="form-group">
            {!! Form::label('username') !!}
            {!! Form::text('username', null, array('class' => 'form-control')) !!}
          </div>

          <div class="form-group">
            {!! Form::label('email') !!}
            {!! Form::text('email', null, array('class' => 'form-control')) !!}
          </div>

          <div class='form-group'>
            {!! Form::label('password') !!}
            {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
          </div>
          <div class='form-group'>
            {!! Form::label('password_confirmation') !!}
            {!! Form::password('password_confirmation', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
          </div>


          <div class="form-group">
          {!! Form::submit('Create', array('class' => 'btn btn-primary')) !!}
          </div>
          {!! Form::close() !!}
        </div>

          <div class="col-md-4">
          @if ($errors->has())
           @foreach ($errors->all() as $error)
               <div class='bg-danger alert'>{{ $error }}</div>
           @endforeach
           @endif
           </div>

        </div>
      </div>

    @stop

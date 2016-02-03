@extends('app')

    @section('nav')

    @stop

    @section('content')
    </hr>
    <div class="container-fluid">
      <div class="row">
    <div class='col-md-4'>



        <h1><i class='fa fa-user'></i> Edit User</h1>
        {!! Form::model(['route' => ['edit.user', $user->id], 'method' => 'PUT']) !!}

        <div class='form-group'>
            {!! Form::label('username', 'Username') !!}
            {!! Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) !!}
        </div>

        <div class='form-group'>
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
        </div>

        <div class='form-group'>
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
        </div>

        <div class='form-group'>
            {!! Form::label('password_confirmation', 'Confirm Password') !!}
            {!! Form::password('password_confirmation', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
        </div>

        <div class='form-group'>
            {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
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
  </diV>
</div>

@stop

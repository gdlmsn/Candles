@extends('app')

    @section('nav')

    @stop

    @section('content')

    <h1>Create a New Product</h1>

    </hr>

    <div class="container-fluid">

      <div class="row">
        <div class="col-md-4">
          {!! Form::open(array('url' => 'products', 'method' => 'post')) !!}


          <div class="form-group">
          {!! Form::label('name') !!}
          {!! Form::text('name',null, array('class' => 'form-control')) !!}
          </div>

          <div class="form-group">
          {!! Form::label('stock') !!}
          {!! Form::text('stock', null, array('class' => 'form-control')) !!}
          </div>

          <div class="form-group">
          {!! Form::label('price') !!}
          {!! Form::text('price', null, array('class' => 'form-control')) !!}
          </div>

          <div class="form-group">
          {!! Form::label('special_price') !!}
          {!! Form::text('special price', null, array('class' => 'form-control')) !!}
          </div>

          <div class="form-group">
          {!! Form::label('weight') !!}
          {!! Form::text('weight', null, array('class' => 'form-control')) !!}
          </div>

          <div class="form-group">
          {!! Form::label('size') !!}
          {!! Form::text('size', null, array('class' => 'form-control')) !!}
          </div>

          <div class="form-group">
          {!! Form::label('description') !!}
          {!! Form::text('description', null, array('class' => 'form-control')) !!}
          </div>


          <div class="form-group">
          {!! Form::submit('Create', array('class' => 'btn btn-primary')) !!}
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

    @stop

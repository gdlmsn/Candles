@extends('app')

    @section('nav')

    @stop

    @section('content')
    </hr>
    <div class="container-fluid">
      <div class="row">
    <div class='col-md-4'>



        <h1><i class='fa fa-user'></i> Edit Product</h1>
        {!! Form::model(['route' => ['edit.product', $product->id], 'method' => 'PUT']) !!}

        <div class='form-group'>
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) !!}
        </div>

        <div class='form-group'>
            {!! Form::label('stock', 'stock') !!}
            {!! Form::stock('stock', null, ['placeholder' => 'Stock', 'class' => 'form-control']) !!}
        </div>

        <div class='form-group'>
            {!! Form::label('price', 'price') !!}
            {!! Form::price('price', null,  ['placeholder' => 'price', 'class' => 'form-control']) !!}
        </div>

        <div class='form-group'>
            {!! Form::label('special_price', 'special_price') !!}
            {!! Form::price('special_price', null,  ['placeholder' => 'special_price', 'class' => 'form-control']) !!}
        </div>

        <div class='form-group'>
            {!! Form::label('weight', 'weight') !!}
            {!! Form::price('weight', null,  ['placeholder' => 'weight', 'class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::label('size', 'size') !!}
            {!! Form::price('size', null,  ['placeholder' => 'size', 'class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::label('description', 'description') !!}
            {!! Form::price('description', null,  ['placeholder' => 'description', 'class' => 'form-control']) !!}
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

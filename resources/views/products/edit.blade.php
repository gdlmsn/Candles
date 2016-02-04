@extends('app')

    @section('nav')

    @stop

    @section('content')
    </hr>
    <div class="container-fluid">
      <div class="row">
    <div class='col-md-4'>



        <h1><i class='fa fa-user'></i> Edit Product</h1>
        {!! Form::model($product, ['route' => ['edit.product', $product->id], 'method' => 'PATCH']) !!}

        <div class='form-group'>
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('username', null, ['placeholder' => 'Username', 'class' => 'form-control']) !!}
        </div>

        <div class='form-group'>
            {!! Form::label('stock', 'Stock') !!}
            {!! Form::stock('stock', null, ['placeholder' => 'Stock', 'class' => 'form-control']) !!}
        </div>

        <div class='form-group'>
            {!! Form::label('price', 'Price') !!}
            {!! Form::price('price', null,  ['placeholder' => 'Price', 'class' => 'form-control']) !!}
        </div>

        <div class='form-group'>
            {!! Form::label('special_price', 'Special Price') !!}
            {!! Form::price('special_price', null,  ['placeholder' => 'Special Price', 'class' => 'form-control']) !!}
        </div>

        <div class='form-group'>
            {!! Form::label('weight', 'Weight') !!}
            {!! Form::price('weight', null,  ['placeholder' => 'Weight', 'class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::label('size', 'Size') !!}
            {!! Form::price('size', null,  ['placeholder' => 'Size', 'class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::label('description', 'description') !!}
            {!! Form::price('description', null,  ['placeholder' => 'Description', 'class' => 'form-control']) !!}
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

@extends('app')

@section('nav')
@stop

@section('content')
<div class="container">
  <h1 class="title text-center">Administrator</h1>
  <hr>
  <div class="col-lg-10 col-lg-offset-1">
    <h2 class="title text-center">Users Panel</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td>

                        <a href="{{ action('UsersController@edit',[$user->id]) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        {!! Form::open(['route' => ['delete.user', $user->id], 'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="/user/create" class="btn btn-success pull-right">Add User</a>
<br>
<br>
<br>
</div>

<div class="col-lg-10 col-lg-offset-1">
  <h2 class="title text-center">Products Panel</h2>
  <div class="table-responsive">
      <table class="table table-bordered table-striped">

          <thead>
              <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Date/Time Added</th>
                  <th>Actions</th>
                  <th>Actions</th>
                  <th>Actions</th>
                  <th>Actions</th>
                  <th>Actions</th>
              </tr>
          </thead>

          <tbody>
              @foreach ($products as $product)
              <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->special_price }}</td>
                <td>{{ $product->weight }}</td>
                <td>{{ $product->size }}</td>
                <td>{{ $product->description }}</td>

                        <td>

                            <a href="{{ action('ProductController@edit',[$product->id]) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                            {!! Form::open(['route' => ['mamma', $product->id], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
              </tr>
              @endforeach
          </tbody>

      </table>
  </div>

  <a href="/products/create" class="btn btn-success pull-right">Add User</a><br>
<br>
<br>
</div>


</div>
@stop

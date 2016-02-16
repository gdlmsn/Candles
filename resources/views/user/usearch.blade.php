@extends('app')

@section('nav')
@stop

@section('content')

<div class="container">
  <h1 class="title text-center">Administrator</h1>
<div class="col-lg-10 col-lg-offset-1">



    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
              @if (count($users) === 0)


              echo   <h1 class="title text-center">Stronzo</h1>;
               @elseif (count($users) >= 1)

                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
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
                @endif
            </tbody>

        </table>
    </div>

    <a href="/user/create" class="btn btn-success pull-right">Add User</a>
    <a href="{{url('user')}}" class="btn btn-info pull-right" style="margin-right: 3px;">Back</a>
<br>
<br>
<br>
</div>
</div>
@stop

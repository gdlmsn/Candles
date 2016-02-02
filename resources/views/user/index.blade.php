@extends('app')

@section('nav')
@stop

@section('content')
<div class="container-fluid">


<div class="col-lg-10 col-lg-offset-1">
<h1 class="title text-center">Admin Panel</h1>

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

                        <a href="/user/{{ $user->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        {!! Form::submit('Create', array('class' => 'btn btn-primary')) !!}
                        {!! Form::open(['url' => '/user/' . $user->id, 'method' => 'DELETE']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="/user/create" class="btn btn-success">Add User</a>

</div>
</div>
@stop

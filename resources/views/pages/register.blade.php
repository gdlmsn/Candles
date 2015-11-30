@extends('app')

    @section('nav')

        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#about">AAAAAAAAAA</a>
            </li>
            <li>
                <a href="#services">Services</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>

    @stop

    @section('content')

        <div class="title">{{ $welcome }}</div>
        <div class="highlight">{{ $useregistration }}</div>

        <hr/>


        {!! Form::open(array('url'=>'regform')) !!}

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
    @stop

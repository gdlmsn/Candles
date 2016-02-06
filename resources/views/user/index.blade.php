@extends('app')

@section('nav')
@stop

@section('content')

<div class="container">
  <h1 class="title text-center">Administrator</h1>
<div class="col-lg-10 col-lg-offset-1">
  <div class="container-fluid">
    <div class="row">
      <a class="btn btn-default update" href="{{url('usearch')}}">Users Table</a>
      <a class="btn btn-default check_out" href="{{url('psearch')}}">Products Table</a>
</div>
</div>
</div>
</div>
@stop

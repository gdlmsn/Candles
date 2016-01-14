<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

  <!-- Custom CSS -->
  <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <!-- Selectize Stylesheet-->
  <link href="{{ url('vendor/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <div class="container">


    <!--navbar-->
<div class="container-fluid member">
  <div class="">
    {!! Html::image('img/cart3.png') !!}
  </div>
</div>
    <nav class="navbar">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#barra">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">LUKA</a>
      </div>

      <div class="navbar-collapse" id="barra">
        @yield ('nav')

      </div>
    </nav>


    @yield('content')

    <div class=" allblackeverything">
      <div class="row">
        <div class="col-md-6">
          <ul class="list-group vmen">
            <li class="list-group-item"> <a href="#">Home</a></li>
            <li class="list-group-item"><a href="#">Shop</a></li>
            <li class="list-group-item"><a href="#">Care</a></li>
            <li class="list-group-item"><a href="#">About</a></li>
            <li class="list-group-item"><a href="#">Contact</a></li>
            <li class="list-group-item"><a href="#">Privacy</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h3>Contact us</h3>

          {!! Form::open(array('url'=>'contactform')) !!}

          <div class="form-group formgroup">
            {!! Form::label('email','Email') !!}
            {!! Form::text('email', null,array('class' => 'form-control')) !!}
          </div>

          <div class="form-group formgroup">
            {!! Form::label('textarea','Message') !!}
            {!! Form::text('message', null, array('class' => 'form-control', 'rows' => 100, 'cols' => 40)) !!}
          </div>

          <div class="form-group formgroup">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="list-inline">
        <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
      </div>
    </div>



  </div>



  <!-- jQuery -->
  <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>

  <!--Selectize js-->
  <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>

  <!-- Bootstrap Core JavaScript -->
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

  <script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>

  <script type="text/javascript" src='{{ url("vendor/selectize/js/standalone/selectize.min.js") }}'></script>

  <script type="text/javascript">
      var root = '{{url("/")}}';
  </script>

</body>

</html>

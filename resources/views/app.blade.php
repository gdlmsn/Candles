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
  <!-- GoogleApis-->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <div class="container">

      <!--navbar-->
        @yield ('nav')
          <div class="container-fluid member">
          </div>
          <div class="container-fluid">
            <div class="row">
            <nav class="navbar">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <div class="container-fluid">
                <div class="row">
                  <nav class="navbar" role="navigation">
                      <!-- Brand and toggle grouped for mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <div class="col-sm-4">
                          <div class="logo pull-left">
                            <a href="{{url('')}}"><img src="{{asset('images/home/logo.png')}}" alt="" /></a>
                          </div>
                        </div>
                      </div>
                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="navbar-collapse collapse navbar-right" id="navbar-collapsible">
                        <ul class="nav navbar-nav">
                          <li><a href="{{url('/')}}"> Home</a></li>
                          <li><a href="{{url('products')}}">Products</a></li>
                          <li><a href="{{url('user')}}"> Admin</a></li>
                          <li><a href="{{url('wishlist')}}"> Wishlist</a></li>
                          <li><a href="{{url('cart')}}"> Cart</a></li>
                          <li><a href="{{Auth::check() ? url('auth/logout') : url('auth/login')}}"> {{Auth::check() ? 'Logout' : 'Login'}}</a></li>
                        </ul>
                      </div>
                      <!-- /.navbar-collapse -->

                    <!-- /.container-fluid -->
                  </nav>
                  </div>
                </div>



    <!-- content -->
    @yield('content')
    @yield('footer')
    <footer id="footer">
        <div class=" allblackeverything">
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-sm-3 col-sm-offset-2">
                  <h2 class="title text-center">Contact Us</h2>
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
                      <div class="footer-widget">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3 col-sm-offset-2">
                                    <div class="single-widget">
                                        <h2>Service</h2>
                                        <ul class="nav nav-pills nav-stacked">
                                            <li><a href="#">Online Help</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Order Status</a></li>
                                            <li><a href="#">Change Location</a></li>
                                            <li><a href="#">FAQ’s</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                          </div>
                      </div>
              </div>


            <div class="footer-bottom">
              <div class="container">
                <div class="row">
                  <p class="pull-left">Copyright © {{date('Y')}} Giulio Dalmasson. All rights reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>



  <!-- jQuery -->
  <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>

  <!-- Bootstrap Core JavaScript -->
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

  <script type="text/javascript" src='//code.jquery.com/jquery-1.10.2.min.js'></script>


  <script type="text/javascript">
      var root = '{{url("/")}}';
  </script>

</body>

</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

                <script src="{{url('css/bootstrap-tour.min.cs') }}"></script>
      
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ url('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('adminlte/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url('adminlte/dist/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="adminlte/plugins/datatables/dataTables.bootstrap.css">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



@yield('header')







  <style type="text/css">

  body{
    font-family: '微軟正黑體'!important;
  }


                input.hidden {
    position: absolute;
    left: -9999px;
}

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
    border:2px solid #03b1ce ;}
    .tital{ font-size:16px; font-weight:500;}
     .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}    


  </style>





</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background-color: #fff">
            <div class="col-xs-12">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}" style="padding:0px; ">
                        <img src="{{url('logo.png')}}" style="height:50px;margin:0px;">
                    </a>
                </div>


                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                        @if (Auth::guest())

                        @else

                            <li><a href="{{ url('/lobby') }}">股票大廳</a></li>
                            <li><a href="{{ url('/analytics') }}">股票分析</a></li>

                            
                        @endif

                    </ul>



                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>

            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ url('adminlte/js/app.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<!-- FastClick -->
<script src="{{ url('adminlte/plugins/fastclick/fastclick.js') }}"  ></script>
<!-- AdminLTE App -->
<script src="{{ url('adminlte/dist/js/adminlte.js') }}" ></script>
<!-- Sparkline -->
<script src="{{ url('adminlte/plugins/sparkline/jquery.sparkline.min.js') }}" ></script>
<!-- jvectormap -->
<script src="{{ url('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"  ></script>
<script src="{{ url('adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" ></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{ url('adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}" ></script>
<!-- ChartJS 1.0.1 -->
<script src="{{ url('adminlte/plugins/chartjs/Chart.min.js') }}" ></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('adminlte/dist/js/pages/dashboard2.js') }}" src=""></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('adminlte/dist/js/demo.js') }}" ></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>


<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<script src="{{url('adminlte/plugins/chartjs/Chart.min.js')}}"></script>
<script src="{{url('adminlte/dist/js/demo.js')}}"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{url('js/bootstrap-tour.min.js') }}"></script>


@yield('footer')






</body>
</html>

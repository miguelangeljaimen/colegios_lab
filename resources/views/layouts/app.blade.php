<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
     
      @yield('estilos')
     
     <link href="{{ asset('componentes/landing/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Custom fonts for this template -->
    
    <link href="{{ asset('componentes/landing/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    
    <link href="{{ asset('componentes/landing/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('componentes/landing/css/landing-page.min.css')}}" rel="stylesheet">

    
</head>
<body>
    <div id="app">


    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="#">Colegios_lab</a>
        @guest
        <a class="btn btn-primary" href="{{ url('/auth/google') }}"><i class="fa fa-google"></i><b>+</b></a>
        @else
        <a class="btn btn-default" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ Auth::user()->name }}</a>
                                                     
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
        @endguest
      </div>
    </nav>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->



        @yield('content')
    </div>

    <!-- Scripts -->
        <script src="{{ asset('componentes/landing/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('componentes/landing/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>



        

<!--

        <nav class="navbar navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">

                    
                    <button type="button" class="nav navbar-nav navbar-right" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                  
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
               
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                
                    <ul class="nav navbar-nav navbar-right">
                   
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

 
     <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> 

    <style>
        body {
            font-family: 'Ubuntu';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Tes One Integra
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                


                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                    @else 
                        <li><a href="#">{{ Auth::user()->name }}</a></li>
                        <li><a href="{{ url('/logout') }}">Logout </a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @if (Auth::guest())
        @yield('login') 
    
    @else
    <div class="col-md-2">
        <div class="panel panel-default">  
        <div class="panel-heading">Menu</div>
        <div class="panel-body">         
            <a href="{{ url('/biodata') }}">Biodata</a><br>
            <a href="{{ url('/kegiatan') }}">Kegiatan</a><br>
            <a href="{{ url('/absen') }}">Absen</a>
        </div>
        </div>
        </div>
    </div>

    <div class="col-md-9">
        @yield('content')
    </div>
    @endif
    <!-- JavaScripts -->
   
     <script src="{{ asset('js/bootstrap.js') }}"></script> 
</body>
</html>

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
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/toastr.min.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/tooplate-style.css')}}"> 
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">

    @yield('styles')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{route('home')}}
                    ">
                        Travel Booking
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
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
                                        <a  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item">
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
 <div>
                @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
          </div>
              @endif
         </div>
        <div class="container">
            <div class="row">
                @if(Auth::check())

                <div class="col-lg-4">
                    <ul class="list-group">
                         <li class="list-group-item" style="background-color:#3498db;color:#fff;">
                            <i class="fa fa-home"></i>&nbsp;
                            <a href=" {{route('home')}} " style="color:#fff;">Home</a>
                        </li>
                       
                    
                   
                         <li class="list-group-item sido" style="background-color:#3498db;color:#fff;">
                            <i class="fa fa-bed"></i>&nbsp;
                            <a href=" {{route('hotels.show')}} " style="color:#fff;">Hotels</a>
                        </li>
                          <li class="list-group-item sido" style="background-color:#3498db;color:#fff;">
                            <i class="fa fa-plus-circle"></i>&nbsp;
                            <a href=" {{route('hotels.create')}} " style="color:#fff;">Add Hotels</a>
                        </li>
                         <li class="list-group-item sido" style="background-color:#3498db;color:#fff;">
                            <i class="fa fa-user-circle"></i>&nbsp;
                            <a href=" {{route('user.index')}} " style="color:#fff;">Users</a>
                        </li>
                       

                       </ul>
                   
                    
                </div> 
                 @endif
                <div class="col-lg-8">
                    @yield('content')
                        
                    </div>  
            </div>

        </div>  
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src=" {{asset('js/toastr.min.js')}} "></script>
    <script>
        @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")
        @elseif(Session::has('nope'))
            toastr.warning("{{Session::get('nope')}}")
        @endif

    </script>
    
</body>
</html>

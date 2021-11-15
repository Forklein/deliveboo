<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Deliveboo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>
    <div class="">
        @if (Route::has('login'))
            <nav class="navbar navbar-expand-lg" id="main-menu">
                <div class="container">
                    <div class="navbar-nav-container d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex justify-content-between">
                        <div class="deliveboo d-flex align-items-center text-white">
                            <a href="{{url('/')}}"><img id="logo" src="{{ asset('img/logo.png') }}" alt="logo" /></a>
                            <h1>Deliveboo</h1>
                        </div>
                        <ul class="navbar-nav">
                            @auth
                                <li class="nav-item">
                                    <a class="btn btn-primary" href="{{ url('/admin/home') }}">Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                                </li>

                                <li class="nav-item">
                                    @if (Route::has('register'))
                                        <a class="btn btn-primary" href="{{ route('register') }}">Register</a></button>
                                    @endif
                                </li>
                            @endauth
                        </ul>
                    </div>
                    {{-- use bootstrap --}}
                    <a href="#" class="d-xs-block d-sm-block d-md-none d-lg-none d-xl-none">
                        <img class="toggle-menu icon" src="img/menu-icon.png" alt="menu-icon">
                    </a>
                </div>
            </nav>
        @endif

        <div id="root"></div>
        
    </div>



    
    <script src="{{ asset('js/front.js') }}"></script>
</body>

</html>

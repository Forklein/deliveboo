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
                    <img id="logo" src="{{ asset('img/logo.png') }}" alt="logo" />
                    <div class="navbar-nav-container d-xs-none d-sm-none d-md-flex d-lg-flex d-xl-flex">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#restaurants-list"><img class="icon"
                                        src="img/restaurant-icon.png" alt="restaurant-icon">Restaurants</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about-us"><img class="icon"
                                        src="img/info-icon.png" alt="info-icon">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#our-values">Our values</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contacts"><img class="icon"
                                        src="img/contacts-icon.png" alt="">Contacts</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            @auth
                                <li class="nav-item">
                                    <button><a href="{{ url('/admin/home') }}">Home</a></button>
                                </li>
                            @else
                                <li class="nav-item">
                                    <button><a href="{{ route('login') }}"><img class="icon"
                                                src="img/login-icon.png" alt="">Login</a></button>
                                </li>

                                <li class="nav-item">
                                    @if (Route::has('register'))
                                        <button><a href="{{ route('register') }}"><img class="icon"
                                                    src="img/sign-up-icon.png" alt="">Register</a></button>
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
        
        <script src="{{ asset('js/front.js') }}"></script>
    </div>
</body>

</html>

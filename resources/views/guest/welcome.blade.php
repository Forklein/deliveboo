<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Deliveboo</title>
</head>

<body>
    @if (Route::has('login'))
            <nav class="navbar d-flex justify-content-around align-items-center p-0" id="main-menu">
                <a href="{{url('/')}}"><img id="logo" src="{{ asset('img/logo.png') }}" alt="logo" /></a>
                <a href="{{url('/')}}"><h1 class="m-0">Deliveboo</h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="mr-1 fas fa-bars p-0" id="menu-icon"></i></span>
                </button>
                <div class="collapse navbar-collapse bg-jasmine" id="navbarNav">
                    <div class="container justify-content-around">
                        <ul class="navbar-nav d-flex flex-column w-100">
                            <div class="nav-block">
                                <li class="nav-item">
                                    <a class="nav-link py-0" href="/#restaurants-list"><i
                                            class="mr-1 fas fa-utensils"></i><b>Restaurants</b></a>
                                </li>
                            </div>
                            <div class="nav-block">
                                <li class="nav-item">
                                    <a class="nav-link py-0" href="/#about-us"><i class="mr-1 fas fa-info-circle"></i><b>About
                                        us</b></a>
                                </li>
                            </div>
                            <div class="nav-block">
                                <li class="nav-item p-0 mr-5">
                                    <a class="nav-link py-0" href="{{url('/contact')}}"><i
                                            class="mr-1 fas fa-address-book"><b></i>Contacts</b></a>
                                </li>
                            </div>
                            <li class="nav-item">
                                <a class="nav-link py-0" href="/#links"><i class="mr-1 fas fa-hashtag"></i><b>Links</b></a>
                            </li>
                            <hr class="d-md-none bg-white">
                            @auth
                                <li class="nav-item">
                                    <button class="p-2 my-2 rounded-pill text-white"><a
                                            href="{{ url('/admin/home') }}" class="p-2"><i
                                                class="btn-icon mr-1 fas fa-home"></i><b>Dashboard</b></a></button>
                                </li>
                            @else
                            <div class="d-flex align-items-center justify-content-around">
                                <li class="nav-item mr-md-2">
                                    <button class="p-2 rounded-pill text-white"><a href="{{ route('login') }}"
                                            class="p-2"><i
                                                class="btn-icon mr-1 fas fa-sign-in-alt"></i><b>Login</b></a></button>
                                </li>
    
                                <li class="nav-item">
                                    @if (Route::has('register'))
                                        <button class="p-2 my-2 rounded-pill text-white"><a
                                                href="{{ route('register') }}" class="p-2"><i
                                                    class="btn-icon mr-1 fas fa-user-plus"></i><b>Register</b></a></button>
                                    @endif
                                </li>
                            </div>
                            @endauth
                        </ul>
                    </div>
                </div>
            </nav>
    @endif

    <div id="root"></div>
    
    <script src="{{ asset('js/front.js') }}"></script>
</body>

</html>

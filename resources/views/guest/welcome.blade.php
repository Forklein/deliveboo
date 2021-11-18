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

    {{-- Icon mr-1s --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    @if (Route::has('login'))
        <nav class="navbar navbar-expand-lg d-flex align-items-center p-0" id="main-menu">
            <div class="container">
                <a href="{{url('/')}}"><img id="logo" src="{{ asset('img/logo.png') }}" alt="logo" /></a>
                <a href="{{url('/')}}"><h1>Deliveboo</h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="mr-1 fas fa-bars p-0" id="menu-icon"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav pb-1 px-3 d-flex align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link py-0" href="/#restaurants-list"><i
                                    class="mr-1 fas fa-utensils"></i>Restaurants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0" href="/#about-us"><i class="mr-1 fas fa-info-circle"></i>About
                                us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-0" href="/#links"><i class="mr-1 fas fa-hashtag"></i>Links</a>
                        </li>
                        <li class="nav-item p-0 mr-5">
                            <a class="nav-link py-0" href="/#contacts"><i
                                    class="mr-1 fas fa-address-book"></i>Contacts</a>
                        </li>
                    
                        @auth
                            <li class="nav-item">
                                <button class="p-2 my-2 rounded-pill text-white"><a
                                        href="{{ url('/admin/home') }}" class="p-2"><i
                                            class="btn-icon mr-1 fas fa-home"></i>Dashboard</a></button>
                            </li>
                        @else
                            <li class="nav-item mr-3">
                                <button class="p-2 rounded-pill text-white"><a href="{{ route('login') }}"
                                        class="p-2"><i
                                            class="btn-icon mr-1 fas fa-sign-in-alt"></i>Login</a></button>
                            </li>

                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <button class="p-2 my-2 rounded-pill text-white"><a
                                            href="{{ route('register') }}" class="p-2"><i
                                                class="btn-icon mr-1 fas fa-user-plus"></i>Register</a></button>
                                @endif
                            </li>
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

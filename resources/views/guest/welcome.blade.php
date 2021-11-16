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

    {{-- Bootstrap js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"
        integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- Icon mr-1s --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="">
        @if (Route::has('login'))
            <nav class="navbar navbar-expand-lg d-flex align-items-center" id="main-menu">
                <div class="container">
                    <img id="logo" src="{{ asset('img/logo.png') }}" alt="logo" class="mr-3" />
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="icon mr-1 fas fa-bars" id="menu-icon mr-1"></i></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                        <ul class="navbar-nav list-unstyled d-flex align-items-center justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" href="#restaurants-list"><i
                                        class="icon mr-1 fas fa-utensils"></i>Restaurants</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about-us"><i class="icon mr-1 fas fa-info-circle"></i>About
                                    us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#links"><i class="icon mr-1 fas fa-hashtag"></i>Links</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contacts"><i
                                        class="icon mr-1 fas fa-address-book"></i>Contacts</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            @auth
                                <li class="nav-item">
                                    <button class="p-2 rounded-pill text-white"><a
                                            href="{{ url('/admin/home') }}" class="p-2"><i
                                                class="icon mr-1 fas fa-home"></i>Home</a></button>
                                </li>
                            @else
                                <li class="nav-item">
                                    <button class="mr-1 p-2 rounded-pill text-white"><a href="{{ route('login') }}"
                                            class="p-2"><i
                                                class="icon mr-1 fas fa-sign-in-alt"></i>Login</a></button>
                                </li>
    
                                <li class="nav-item">
                                    @if (Route::has('register'))
                                        <button class="ml-2 p-2 rounded-pill text-white"><a
                                                href="{{ route('register') }}" class="p-2"><i
                                                    class="icon mr-1 fas fa-user-plus"></i>Register</a></button>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </div>
</body>

</html>

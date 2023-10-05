<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ceritaMagang') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="css/app2.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md" class="wow animated fadeInDown" data-wow-delay="0s">
            <div class="topmenu" id="myTopnav">
                <img class="" style="float:left; padding-right: 100px; " src="">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    <h1>Logo</h1>
                </a>
                

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <ul class="asd">
                            <a class="" href=""> <h5>Komunitas</h5></a>
                            <a class="" href=""> <h5>Cari Lowongan</h5></a>
                            <a class="" href=""> <h5>Cari Pemagang</h5></a>
                        </ul>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item-1">
                                    <a class="nav-link" href="{{ route('login') }}"><h4 class="nav-x">Masuk</h4></a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item-2">
                                    <a class="nav-link" href="{{ route('register') }}"><h4 class="nav-x-2">Daftar</h4></a>
                                </li>
                            @endif
                        @else
                        <img style=" margin-top: auto; margin-bottom:auto; width: 39.217px; height: 39.217px; margin-right: 24px;" src="images/notification.png" alt="Notification">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img style="width: 39.217px; height: 39.217px; margin-right: 103px" src="images/profile.png" alt="Profile">
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                </a>

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>

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
    
    @yield('css')
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body id="app-layout">
        <nav class="navbar navbar-expand-md navbar">
            <div class="container">
                <div class="topmenu" id="myTopnav">
                    <a class="navbar-brand" href="{{ url('/forums') }}">
                        <h1>Logo</h1>
                    </a>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar navbar-inverse navbar-fixed-top">
                            <ul class="asd">
                                <li>
                                    <a href="">Komunitas</a>
                                </li>
                                <li>
                                    <a href=""> Cari Lowongan</a>
                                </li>
                                <li>
                                    <a href="">Cari Pemagang</a>
                                </li>
                            </ul>
                        </ul>
    
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar navbar-inverse navbar-fixed-top ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <h1><a class="nav-link-1" href="{{ route('login') }}">Masuk</a></h1>
                                @endif
    
                                @if (Route::has('register'))
                                    <h1><a class="nav-link-2" href="{{ route('register') }}">Daftar</a></h1>
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
            <!-- JavaScripts -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <!-- Forum js -->
            @yield('js')
        </main>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>


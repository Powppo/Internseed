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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/navbar.css">

    @yield('css')
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body id="app-layout">
    <nav class="navbar" id="myNavbar">
        <div class="brand">
            <span>Logo</span>
        </div>
        <div class="navbar-links">
            <ul>
                <li><a class="linkhover" href="/forums">Komunitas</a></li>
                <li><a class="linkhover" href="#">Cari Lowongan</a></li>
                <li><a class="linkhover" href="#">Cari Pemagang</a></li>
            </ul>
        </div>
        <div class="navbar-auth">
            <ul>
                @guest
                    @if (Route::has('login'))
                        <li class="login"><a href="{{ route('login') }}">Masuk</a></li>
                    @endif
                    @if (Route::has('register'))
                        <li class="register"><a href="{{ route('register') }}">Daftar</a></li>
                    @endif
                    @else
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </ul>
        </div>
        <button aria-label="toggle menu" id="responsiveMenuToggleButton">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="openIcon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>  
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="closeIcon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>    
        </button>
    </nav>
        <main class="py-4">
            @yield('content')
            <!-- JavaScripts -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <!-- Forum js -->
            @yield('js')
            <script type="text/javascript" src="js/navbar.js"></script>
        </main>
    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>
<footer>
    <div class="containerx">
        <div class="flex-box">
            <span>Logo
                <p>Lorem ipsum dolor sit amet consectetur. Leo orci leo leo et ac egestas scelerisque. 
                    Magna elementum id dictum id. Vestibulum quam tellus purus risus eget.</p>
            </span>
            <b class="topMedia">Layanan
                <a href="aboutus">Tentang Kami </a>
                <a href="forums">Komunitas </a>
                <a href="">Cari Lowongan </a>
                <a href="">Profil </a>
            </b>
            <b class="topMedia">Perusahaan
                <a href="">Profil Perusahaan </a>
                <a href="">Cari Pemagang</a>
            </b>
            <b class="topMedia">Sosial Media
                <div>
                    <img src="vendor/devdojo/chatter/assets/images/iconInstagram.png" alt="">
                    <img src="images/iconX.png" alt="">
                    <img src="images/iconLinkedin2.png" alt="">
                    <img src="images/iconYoutube.png" alt="">
                </div>
            </b>
        </div>
        <p>Copyright © 2023 (--). All Rights Reserved </p>
    </div>
</footer>
</html>


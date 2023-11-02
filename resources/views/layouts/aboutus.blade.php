@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
<script src="https://use.fontawesome.com/f59bcd8580.js"></script>
<link rel="stylesheet" href="css/aboutus.css">
@section('content')
    <body>
        <div class="aboutus"><span>Tentang Kami </span></div>
        <div class="content">
            <h1>Lorem ipsum </h1>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                    sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <img class="img"src="images/aboutimg.png"alt="" id="img">
            </div>
        </div>

        <div class="aboutus"><span>Tim </span></div>
        <div class="timconts" id="timconts">
            <img class="blank" src="images/blank.png" alt="profile">
            <h1>Person </h1>
            <h2>Leader </h2>
            <div class="icon">
                <img src="images/iconEmail.png" alt="email">
                <img src="images/iconLinkedin.png" alt="linkedin">
            </div>
        </div>
        <div class="timconts2">
            <div class="timconts" id="timconts">
                <img class="blank" src="images/blank.png" alt="profile">
                <h1>Person </h1>
                <h2>Leader </h2>
                <div class="icon">
                    <img src="images/iconEmail.png" alt="email">
                    <img src="images/iconLinkedin.png" alt="linkedin">
                </div>
            </div>
            <div class="timconts" id="timconts">
                <img class="blank" src="images/blank.png" alt="profile">
                <h1>Person </h1>
                <h2>Leader </h2>
                <div class="icon">
                    <img src="images/iconEmail.png" alt="email">
                    <img src="images/iconLinkedin.png" alt="linkedin">
                </div>
            </div>
            <div class="timconts" id="timconts">
                <img class="blank" src="images/blank.png" alt="profile">
                <h1>Person </h1>
                <h2>Leader </h2>
                <div class="icon">
                    <img src="images/iconEmail.png" alt="email">
                    <img src="images/iconLinkedin.png" alt="linkedin">
                </div>
            </div>
        </div>
        <div class="timconts2">
            <div class="timconts" id="timconts">
                <img class="blank" src="images/blank.png" alt="profile">
                <h1>Person </h1>
                <h2>Leader </h2>
                <div class="icon">
                    <img src="images/iconEmail.png" alt="email">
                    <img src="images/iconLinkedin.png" alt="linkedin">
                </div>
            </div>
            <div class="timconts" id="timconts">
                <img class="blank" src="images/blank.png" alt="profile">
                <h1>Person </h1>
                <h2>Leader </h2>
                <div class="icon">
                    <img src="images/iconEmail.png" alt="email">
                    <img src="images/iconLinkedin.png" alt="linkedin">
                </div>
            </div>
            <div class="timconts" id="timconts">
                <img class="blank" src="images/blank.png" alt="profile">
                <h1>Person </h1>
                <h2>Leader </h2>
                <div class="icon">
                    <img src="images/iconEmail.png" alt="email">
                    <img src="images/iconLinkedin.png" alt="linkedin">
                </div>
            </div>
        </div>

        <div class="aboutus"><span>Kontak </span></div>
        <div class="maps">
            <img src="images/blank2.png" alt="">
            <div class="mapDesc">
                <span>Malang </span>
                <span class="add">PT Blablabla, Jl. Blablabla </span>
                <span>Tel: 021-8082 5888 </span>
                <span>Fax: 021-57957711 / 021-57957722 </span>
                <span>Email: ads-id@jobstreet.com </span>
            </div>
        </div>
    </body>    
@endsection

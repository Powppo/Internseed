@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
<script src="https://use.fontawesome.com/f59bcd8580.js"></script>
<script src="public/js/option.js"></script>
<link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-right.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="css/profil.css" type="text/css">
@section('content')
<div class="profil">
    <div class="content">
        <div class="right-image">
            <img src="images/profil.png" class="img-fluid" style="width: 80%;" />
        </div>
        <div class="left-image">
            <img src="images/profil2.png" class="img-fluid" style="width: 12%;" />
            <!-- <div class="button-container2">
                <a class="buttonEdit" href="edit">
                    Edit
                </a>
            </div> -->
            <div class="button-container">
                <a class="buttonKeluar" href="{{ route('profil') }}">
                    Edit Profil
                </a>
            </div>
        </div>


        </div>
    </div>

@endsection
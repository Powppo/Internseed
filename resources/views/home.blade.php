@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
<script src="https://use.fontawesome.com/f59bcd8580.js"></script>
<script src="public/js/option.js"></script>
<link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-right.css' rel='stylesheet'>
<link rel="stylesheet" href="css/auth2.css" type="text/css">

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="flex-container">
        <button class="btnpost">+POST</button>
        <div class="card large-card">
          <div class="dropdown">
            <button class="dropbtn">&#9776;</button>
                <div class="dropdown-content">
                <a href="#">Edit</a>
                <a href="#">Hapus</a>
                </div>
          </div>      
</div>
<div class="card small-card">
          <h4>Rekomendasi Topik</h4>
          <p class="yellow-paragraph">Lihat lebih banyak<i class="gg-arrow-right"></i></p>
          <h5>Lorem Impsum</h5>
</div>
</div>
      
@endsection

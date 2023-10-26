@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
<script src="https://use.fontawesome.com/f59bcd8580.js"></script>
<link rel="stylesheet" href="css/auth.css" type="text/css">
@section('content')
<div class="container">
    <div class="row m-5 no-gutters shadow-lg">
        <div class="col-md-6 d-none d-md-block">
            <img src="images/sidelogin.png" class="img-fluid" style="width: 2000px; min-height:100%" alt="sidelogin"/>
        </div>
        <div class="col-md-6 bg-black p-4">
                <div class="logintxt">
                    <img class="imglogin" src="images/authp.png" alt="-">
                    <h3 style="font-size: 30px; font-weight:700;">Selamat Datang Kembali!</h3>
                    <h4 style="font-size: 25px; font-weight:400;">Masuk ke Akun Anda</h4>
                    <div class="form-style">
                        <form class="formx" method="POST" action="{{ route('login') }}">
                        @csrf
                            <div>
                                <label class="labely">Email</label>
                                <input type="email" placeholder="Masukan Email Anda" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="labely">Password</label>
                                <input type="password" placeholder="Masukan Password Anda" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <button class="btnlogin" type="submit">Masuk</button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">

                                    </a>
                                @endif
                            <div class="returnx">
                                Belum Punya Akun? <a style="color: #FFFFFF; text-decoration: none;" href="/register">Daftar</a>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
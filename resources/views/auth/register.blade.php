@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
<script src="https://use.fontawesome.com/f59bcd8580.js"></script>
<script src="public/js/option.js"></script>
<link rel="stylesheet" href="css/auth2.css" type="text/css">
@section('content')
<div class="container">
    <div class="row m-6 no-gutters shadow-lg">
        <div class="col-md-5 d-none d-md-block">
            <img src="images/register.png" class="img-fluid" style="min-height:100%" alt="sideregister" />
        </div>
        <div class="col-md-7 bg-black p-4">
            <div class="logintxt">
                <img class="imglogin2" src="images/authp.png" alt="-">
                <h3 style="font-size: 30px; font-weight:700;">Buat Akun</h3>
                <h4 style="font-size: 25px; font-weight:400; margin-bottom: 19px; max-width: 75%; display:block; margin-left: auto; margin-right: auto;">Gabung Dengan Komunitas Kami dan
                    Temukan Banyak Peluang Magang</h4>
                <div class="form-stylex">
                    <form class="formx2" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="inputdetails2">
                            <div>
                                <label class="labely">Email</label>
                                <input type="email" placeholder="Masukan Email Anda" id="email"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                                <label class="labely">Username</label>
                                <input type="name" placeholder="Masukan Username Anda" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="inputdetails2">
                            <div>
                                <label class="labely">Password</label>
                                <input type="password" placeholder="Masukan password Anda" id="password" class="form-control @error('password') is-invalid @enderror" name="password">
                            </div>
                            <div>
                                <label class="labely">Konfirmasi Password</label>
                                <input type="password" placeholder="Masukan Ulang Password Anda" id="password-confirm" class="form-control" name="password_confirmation">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="inputdetails">
                            <label class="labely">Buat Akun Sebagai</label>
                        </div>
                        <div class="optionz">
                                <input type="radio" id="option1" name="option" value="option1">
                                <label class="optiony" for="option1">Pelamar</label>
                                <input type="radio" id="option2" name="option" value="option2">
                                <label class="optiony" for="option2">Perekrut</label>
                        </div>
                        <button class="btnloginx" type="submit">Daftar</button>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">

                        </a>
                        @endif
                        <div class="returnx">
                            Sudah Punya Akun? <a style="color: #FFFFFF; text-decoration: none;" href="/login">Masuk</a> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

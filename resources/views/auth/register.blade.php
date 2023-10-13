@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <div class="col-md-4">
            <img src="{{ asset('public/images/register.jpg') }}"  class="img-fluid">
        </div>

        <div class="col-md-8">
            <div class="card">     

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="tt-title">
                            Buat Akun
                        </div>


                        <div class="tt-description">
                        Gabung dengan Komunitas Kami dan termukan banyak Peluang Magang
                        </div>

                        <div class="custom-margin"></div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="title">
                            Buat Akun Sebagai:
                        </div>
                        <div class="custom-margin"></div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Daftar') }}
                                </button>
                            </div>
                        </div>

                        <div class="custom-margin"></div>


                        <p>Sudah punya  akun? <a href="{{ route('login') }}" class="tt-underline">Masuk</a></p>

                        <!-- Continue Google 
                        <div class="row">
                            <div class="container" style="text-align: center">
                                <div style="float:left; width: 48%;"><hr/></div>
                                <div style="float:right; width: 48%;"><hr/></div>
                                <div>Or</div>
                              <a  class="btn btn-md btn-google btn-block btn-outline" href="{{ '/auth/redirect'}}"><img style="width:13%" src="{{url('/images/googleicon.png')}}"> Continue with Google</a>
                            </div>
                        </div> -->

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

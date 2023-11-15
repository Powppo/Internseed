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
                <a class="buttonKeluar" href="{{ route('edit') }}">
                    Keluar
                </a>
            </div>
        </div>
       
            <form method="POST" action="{{ route('profil.simpan') }}">
            @csrf
                <div class="formProfil">

                    <div class="row mb-3">
                     <label for="colFormLabel" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                     <input type="text" name="nama" class="form-control" id="colFormLabel" placeholder="Nama" value="{{ old('name', auth()->user() ? auth()->user()->name : '') }}">
                     <!-- value="{{ auth()->user() ? auth()->user()->name : '' }}" -->
                  </div>
                </div>

                    <div class="row mb-3">
                      <label for="colFormLabel" class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" placeholder="Masukkan Email Anda" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', auth()->user() ? auth()->user()->email : '') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                     <label for="colFormLabel" class="col-sm-4 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Nomor Telepon" value="{{ old('nomor_telepon', auth()->user() ? auth()->user()->nomor_telepon : '') }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                     <label for="colFormLabel" class="col-sm-4 col-form-label">Asal/Domisili</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="asal" name="asal" placeholder="Asal/Domisili" value="{{ old('asal', auth()->user() ? auth()->user()->asal : '') }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                     <label for="colFormLabel" class="col-sm-4 col-form-label">Jurusan/Prodi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan/Prodi" value="{{ old('jurusan', auth()->user() ? auth()->user()->jurusan : '') }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                     <label for="colFormLabel" class="col-sm-4 col-form-label">Sekolah/universitas</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Sekolah/Universitas" value="{{ old('pendidikan', auth()->user() ? auth()->user()->pendidikan : '') }}">
                        </div>
                    </div>

                    <!-- <div class="row mb-3">
                     <label for="colFormLabel" class="col-sm-4 col-form-label">CV/Resume</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" id="cv_resume" name="cv_resume" placeholder="CV/Resume" value="{{ old('cv_resume', auth()->user() ? auth()->user()->cv_resume : '') }}">
                            <a File: {{ auth()->user() ? auth()->user()->cv_resume : 'Belum ada CV/Resume' }}</a>
                        </div>
                    </div> -->

                    <div class="row mb-3">
    <label for="colFormLabel" class="col-sm-4 col-form-label">CV/Resume</label>
    <div class="col-sm-8">
        <input type="file" class="form-control" id="cv_resume" name="cv_resume" placeholder="CV/Resume" value="{{ old('cv_resume', auth()->user() ? auth()->user()->cv_resume : '') }}">
        <a class="uploadFile">File: {{ auth()->user() ? (auth()->user()->cv_resume ? basename(auth()->user()->cv_resume) : 'Belum ada CV/Resume') : 'Belum ada CV/Resume' }}</a>
    </div>
</div>


               

                <!-- <div class="row mb-3">
                    <label for="formFile" class="col-sm-4 form-label">CV/Resume</label>
                    <div class="col-sm-8">
                        <input class="form-control" type="file" id="formFile" >
                    </div>
                </div> -->

            </div>

            <button type="submit" class="buttonSimpan">Simpan</button>
            <!-- <button class="buttonSimpan" onclick="event.preventDefault(); document.getElementById('simpan-form').submit();">
            Simpan
            </button>
            <form id="simpan-form" action="{{ route('profil.simpan') }}" method="POST" class="d-none">
            @csrf
            </form> -->

</form>

        </div>
    </div>

@endsection
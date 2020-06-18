@extends('layout/main')

@section('title', 'form tambah data Students')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">form tambah data Students</h1>
            <hr>

            <form action="/students" method="POST">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                </div>
                @error('nama') 
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror

                <div class="form-group">
                    <label for="nim">Nim</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Masukkan nim" name="nim" value="{{ old('nim') }}">
                </div>
                @error('nim') 
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" name="email" value="{{ old('email') }}">
                  </div>
                  @error('email') 
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror

                  <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan jurusan" name="jurusan" value="{{ old('jurusan') }}">
                  </div>
                  @error('jurusan') 
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/students" class="btn btn-danger">Kembali</a>
              </form>

        </div>
    </div>
</div>
@endsection

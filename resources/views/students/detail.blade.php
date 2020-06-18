@extends('layout/main')

@section('title', 'Detail Students')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Students</h1>

            <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{ $student->nama }}</h5>
                      <p class="card-title">{{ $student->nim }}</p>
                      <p class="card-title">{{ $student->email }}</p>
                      <p class="card-title">{{ $student->jurusan }}</p>
                      <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>
                      <form action="/students/{{ $student->id }}" method="POST" class="d-inline">
                        @method('delete') @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </form>
                      <a href="/students" class="card-link">kembali</a>
                    </div>
            </div>

        </div>
    </div>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <a href="{{ route('data-movie.index') }}" class="btn btn-sm btn-warning shadow-sm mb-0 mt-3">
                <i class="fas fa-arrow-left fa-sm"></i> Back
            </a>
            <h1 class="h3 mb-0 mt-3 text-black">Data Movie</h1>
        </div>
    
    <form action="{{ route('data-movie.store') }}" method="POST" class="form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" id="judul" class="form-control" name="judul" required>
        </div>
        <div class="form-group">
            <label for="starring">Starring</label>
            <input type="text" id="starring" class="form-control" name="starring" required>
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" id="genre" class="form-control" name="genre" required>
        </div>
        <div class="form-group">
            <label for="language">Language</label>
            <input type="text" id="language" class="form-control" name="language" required>
        </div>
        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" id="subtitle" class="form-control" name="subtitle" required>
        </div>
        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="time" id="duration" class="form-control" name="duration" required>
        </div>
        <div class="form-group">
            <label for="harga">Price</label>
            <input type="number" id="harga" class="form-control" name="harga" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="image">Cover</label>
            <input type="file" id="image" class="form-control-file" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">
            Submit
        </button>
    </form>
    </div>
</div>
@endsection

@push('addon-script')
    @if (Session::get('error-tambah-movie'))
        <script>
            swal({
                title: "Gagal Menambah Data",
                text: "Movie Sudah Tersedia",
                icon: "error",
            });
        </script>
    @endif
@endpush
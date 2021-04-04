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
    
    <form action="{{ route('data-movie.update', $item->id_movie) }}" method="POST" class="form" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row justify-content-between">
            <div class="col-md-8">
                <div class="form-group">
                    <label for="judul">Judul</label>
                <input type="text" id="judul" class="form-control @error('judul') is-invalid @enderror " name="judul" value="{{ $item->judul }}" required>
                @error('judul')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="starring">Starring</label>
                <input type="text" id="starring" class="form-control @error('starring') is-invalid @enderror " name="starring" value="{{ $item->starring }}" required>
                @error('starring')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
                <input type="text" id="genre" class="form-control @error('genre') is-invalid @enderror " name="genre" value="{{ $item->genre }}" required>
                @error('genre')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                <input type="text" id="language" class="form-control @error('language') is-invalid @enderror " name="language" value="{{ $item->language }}" required>
                @error('language')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="subtitle">Subtitle</label>
                <input type="text" id="subtitle" class="form-control @error('subtitle') is-invalid @enderror " name="subtitle" value="{{ $item->subtitle }}" required>
                @error('subtitle')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="time" id="duration" class="form-control @error('duration') is-invalid @enderror" name="duration" value="{{ $item->duration }}" required>
                @error('duration')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Price</label>
                <input type="number" id="harga" class="form-control @error('harga') is-invalid @enderror " name="harga" value="{{ $item->harga }}" required>
                @error('harga')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $item->description }}" required>
                @error('description')
                <span class="invalid-feedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="cover">Cover Movie </label>
                    <img id="image" src="{{ asset('storage/images/cover-film/'. $item->image) }}" class="img-thumbnail" style="max-width:350px;">
                    <input type="file" id="image" class="form-control-file @error('image') is-invalid @enderror" name="image" onchange="preview_image(event)">
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">
            Submit
        </button>
    </form>
    </div>
</div>
@endsection

@push('addon-script')
    <script>
        function preview_image(event) 
        {
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>

    @if (Session::get('error-ubah-movie'))
        <script>
            swal({
                title: "Gagal Mengubah Data",
                text: "Movie Sudah Tersedia",
                icon: "error",
            });
        </script>
    @endif
@endpush
@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <a href="{{ route('data-jadwal.index') }}" class="btn btn-sm btn-warning shadow-sm mb-0 mt-3">
                <i class="fas fa-arrow-left fa-sm"></i> Back
            </a>
            <h1 class="h3 mb-0 mt-3 text-black">Data Jadwal</h1>
        </div>

        @if (session('alert'))
        <div class="alert alert-danger">
            {{ session('alert') }}
        </div>
        @endif

    
    <form action="{{ route('data-jadwal.update', $item->id_jadwal) }}" method="POST" class="form">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul</label>
            <select name="id_movie" id="judul" class="form-control">
                @foreach ($movies as $movie)
                    <option value="{{ $movie->id_movie }}" @if ($item->id_movie == $movie->id_movie)
                        selected
                    @endif>{{ $movie->judul }}</option>
                @endforeach
            </select>
        @error('judul')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ $item->tanggal }}">
        @error('tanggal')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="jam">Jam</label>
            <select name="jam" id="jam" class="form-control">
                <option value="10:00" @if ($item->jam == '10:00')
                    selected
                @endif">10:00</option>
                <option value="13:00" @if ($item->jam == '13:00')
                    selected
                @endif">13:00</option>
                <option value="16:00" @if ($item->jam == '16:00')
                    selected
                @endif">16:00</option>
                <option value="19:00" @if ($item->jam == '19:00')
                    selected
                @endif">19:00</option>
            </select>
        @error('jam')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="studio">Studio</label>
            <select name="studio" id="studio" class="form-control">
                <option value="Studio 1" @if ($item->studio == 'Studio 1')
                    selected
                @endif>Studio 1</option>
                <option value="Studio 2" @if ($item->studio == 'Studio 2')
                    selected
                @endif>Studio 2</option>
                <option value="Studio 3" @if ($item->studio == 'Studio 3')
                    selected
                @endif>Studio 3</option>
                <option value="Studio 4" @if ($item->studio == 'Studio 4')
                    selected
                @endif>Studio 4</option>
            </select>
        @error('studio')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-block">
            Submit
        </button>
    </form>
    </div>
</div>
@endsection

@push('addon-script')
    @if (Session::get('error-ubah-jadwal'))
        <script>
            swal({
                title: "Gagal Mengubah Data",
                text: "Jadwal dan Studio Sudah Tersedia",
                icon: "error",
            });
        </script>
    @endif
@endpush
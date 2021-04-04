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

    <form action="{{ route('data-jadwal.store') }}" method="POST" class="form">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <select name="id_movie" id="judul" class="form-control">
                <option value="">Pilih Judul</option>
                @foreach ($movies as $movie)
                    <option value="{{ $movie->id_movie }}">{{ $movie->judul }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" id="tanggal" class="form-control" name="tanggal">
        </div>
        <div class="form-group">
            <label for="jam">Jam</label>
            <select name="jam" id="jam" class="form-control">
                <option value="">Pilih Jam</option>
                <option value="10:00">10:00</option>
                <option value="13:00">13:00</option>
                <option value="16:00">16:00</option>
                <option value="19:00">19:00</option>
            </select>
        </div>
        <div class="form-group">
            <label for="studio">Studio</label>
            <select name="studio" id="studio" class="form-control">
                <option value="">Pilih Studio</option>
                <option value="Studio 1">Studio 1</option>
                <option value="Studio 2">Studio 2</option>
                <option value="Studio 3">Studio 3</option>
                <option value="Studio 4">Studio 4</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">
            Submit
        </button>
    </form>
    </div>
</div>
@endsection

@push('addon-script')
    @if (Session::get('error-tambah-jadwal'))
        <script>
            swal({
                title: "Gagal Menambah Data",
                text: "Jadwal dan Studio Sudah Tersedia",
                icon: "error",
            });
        </script>
    @endif
@endpush
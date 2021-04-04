@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <a href="{{ route('data-penonton.index') }}" class="btn btn-sm btn-warning shadow-sm mb-0 mt-3">
                <i class="fas fa-arrow-left fa-sm"></i> Back
            </a>
            <h1 class="h3 mb-0 mt-3 text-black">Data Penonton</h1>
        </div>
    
    <form action="{{ route('data-penonton.update', $item->id) }}" method="POST" class="form">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror " name="name" value="{{ $item->name }}">
        @error('name')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $item->email }}">
        @error('email')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select name="jk" id="jk" class="form-control">
                <option value="L" @if ($item->jk == "L")  selected @endif>Laki-Laki</option>
                <option value="P" @if ($item->jk == "P")  selected @endif>Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" id="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ $item->tgl_lahir }}">
        @error('tgl_lahir')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="no_telepon">No Telepon</label>
            <input type="number" id="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon" value="{{ $item->no_telepon }}">
        @error('no_telepon')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="off">
        @error('password')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ $item->alamat }}">
        @error('alamat')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
        </div>
        <div class="form-group">
            <label for="roles">Role</label>
            <select name="roles" id="roles" class="form-control">
                <option value="USER" @if ($item->roles == "USER")  selected @endif>USER</option>
                <option value="ADMIN" @if ($item->roles == "ADMIN")  selected @endif>ADMIN</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">
            Submit
        </button>
    </form>
    </div>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <a href="{{ route('data-admin.index') }}" class="btn btn-sm btn-warning shadow-sm mb-0 mt-3">
                <i class="fas fa-arrow-left fa-sm"></i> Back
            </a>
            <h1 class="h3 mb-0 mt-2 text-black ml-2">Data {{ $item->name }}</h1>
        </div>

        @if ($errors->count() > 0)
        @php
        Alert::error('Gagal Mengubah Data', 'Masih Terdapat Data Belum Valid');
        @endphp
        @endif

        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label>Nama Lengkap</label>
                    </div>
                    <div class="col-4">
                        : {{ $item->name }}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label id="dd">Email</label>
                    </div>
                    <div class="col-4">
                        : {{ $item->email }}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label id="dd">Jenis Kelamin</label>
                    </div>
                    <div class="col-4">
                        : {{ $item->jk }}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label>Tanggal Lahir</label>
                    </div>
                    <div class="col-4">
                        : {{ Carbon\Carbon::parse($item->tgl_lahir)->format('d M Y') }}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label>No Telepon</label>
                    </div>
                    <div class="col-4">
                        : {{ $item->no_telepon }}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3"></div>
                    <div class="col-2">
                        <label>Alamat</label>
                    </div>
                    <div class="col-4">
                        : {{ $item->alamat }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
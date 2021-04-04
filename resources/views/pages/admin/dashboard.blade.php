@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-info text-white">
                    <div class="card-body">
                        Data Penonton
                        <div class="text-white" style="font-size: 30px;">
                            {{ $user }}
                        </div>
                    </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('data-penonton.index') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white">
                    <div class="card-body">
                        Data Movie
                        <div class="text-white" style="font-size: 30px;">
                            {{ $movie }}
                        </div>    
                    </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('data-movie.index') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white">
                    <div class="card-body">
                        Data Jadwal
                        <div class="text-white" style="font-size: 30px;">
                            {{ $jadwal }}
                        </div>    
                    </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('data-jadwal.index') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white">
                    <div class="card-body">
                        Laporan Transaksi
                        <div class="text-white" style="font-size: 30px;">
                            {{ $transaksi }}
                        </div>    
                    </div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{ route('data-transaksi.index') }}">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('includes.admin.footer')
</div>
@endsection
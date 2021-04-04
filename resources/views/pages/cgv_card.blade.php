@extends('layouts.home')

@section('content')
        
<div class="container-fluid header-cgv">
    <div class="container mt-4 pb-3 pt-4">
        <div class="row justify-content-center">
            <div class="col-md-9 pt-5 pl-5 membership-bg">
                <img src="{{ url('frontend/images/profile.png') }}" alt="" class="profile-img mr-4">
                <div class="text-card">
                    {{ Auth::user()->name }}
                    <hr style="height:2px; border-width:0px; color:#6e4d11; background-color:#6e4d11; padding-left:10px;">
                </div>
                <div class="text-card">
                    Email &emsp;&emsp;: {{ Auth::user()->email }}
                </div>
                <div class="text-card">
                    Address &emsp;: {{ Auth::user()->alamat }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-center mt-3 mb-5">
            <div class="col-md-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <h4 style="font-size: 15px;">My CGV</h4>
                    <a class="text-decoration-none text-dark" style="font-size: 15px; margin-left: 30px" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" >My Profile</a>
                    <a class="text-decoration-none text-dark" style="font-size: 15px; margin-left: 30px" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" >My Transactions</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row justify-content-between">
                            <h3 style="font-size: 20px;">My Profile</h3>
                        {{-- <a href="{{ route('profile.edit') }}" class="text-danger text-decoration-none" style="font-size: 14px;">Edit Profile</a> --}}
                        </div>
                        <hr class="mt-0" style="height:1px; border-width:0;color:#000; background-color:#000; ">
                        <div class="form-group row" >
                            <div class="col-2" style="font-size: 15px;">
                                Email
                            </div>
                            <div class="col-5" style="font-size: 15px;">
                                : {{ Auth::user()->email }}
                            </div>
                        </div>
                        <div class="form-group row" >
                            <div class="col-2" style="font-size: 15px;">
                                Name
                            </div>
                            <div class="col-5" style="font-size: 15px;">
                                : {{ Auth::user()->name }}
                            </div>
                        </div>
                        <div class="form-group row" >
                            <div class="col-2" style="font-size: 15px;">
                                Gender
                            </div>
                            <div class="col-5" style="font-size: 15px;">
                                : @if(Auth::user()->jk == "L")
                                    Male
                                @else 
                                    Female
                                @endif
                            </div>
                        </div>
                        <div class="form-group row" >
                            <div class="col-2" style="font-size: 15px;">
                                Birthdate
                            </div>
                            <div class="col-5" style="font-size: 15px;">
                                : {{ Carbon\Carbon::parse(Auth::user()->tgl_lahir)->format('d M Y') }}
                            </div>
                        </div>
                        <div class="form-group row" >
                            <div class="col-2" style="font-size: 15px;">
                                Mobile No.
                            </div>
                            <div class="col-5" style="font-size: 15px;">
                                : {{ Auth::user()->no_telepon }}
                            </div>
                        </div>
                        <div class="form-group row" >
                            <div class="col-2" style="font-size: 15px;">
                                Address
                            </div>
                            <div class="col-5" style="font-size: 15px;">
                                : {{ Auth::user()->alamat }}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        @foreach ($items as $item)
                            <div class="card">
                                <div class="card body py-2 px-2">
                                    <div class="form-group row">
                                        <div class="col-4">
                                            Tanggal Transaksi
                                        </div>
                                        <div class="col-8">
                                            {{ Carbon\Carbon::parse($item->tgl_transaksi)->format('d M Y') }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            Film
                                        </div>
                                        <div class="col-8">
                                            {{ $item->jadwal->movie->judul }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            Jadwal
                                        </div>
                                        <div class="col-8">
                                            {{ $item->jadwal->studio }} , Tanggal {{ Carbon\Carbon::parse($item->jadwal->tanggal)->format('d M Y') }}, JAM {{ $item->jadwal->jam }}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            Total Harga
                                        </div>
                                        <div class="col-8">
                                            Rp.{{ format_uang($item->total_harga) }},00
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="py-5 bg-dark footer">
    <div class="container-fluid">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer> 
@endsection
@extends('layouts.home')

@section('content')
    <!-- /.container -->
    <div class="container-fluid pt-5 info-background">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-3">
                    <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
                    <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
                </div>
                <div class="col-2,5 text-center movie-text pt-1">
                    <h2>
                        DESCRIPTION
                    </h2>
                </div>
                <div class="col-3">
                  <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
                  <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
              </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 py-2 px-2 ">
                <img class="card-img-top" src="{{ asset('storage/images/cover-film/'. $item->image) }}" alt="">
                </div>
                <div class="col-md-3 py-2 px-2 ">
                    <p style="font-size: 14px;">TITLE : {{ $item->judul }} <br>
                    STARRING : {{ $item->starring }} <br>
                    GENRE : {{ $item->genre }} <br>
                    LANGUAGE : {{ $item->language }} <br>
                    SUBTITLE : {{ $item->subtitle }} <br>
                    DURATION : {{ Carbon\Carbon::parse($item->duration)->format('H') }} jam {{ Carbon\Carbon::parse($item->duration)->format('i') }} menit</p>
                </div>
                <div class="col-md-4 py-2 px-2 ">
                <p style="font-size: 14px; text-align: justify;">{{ $item->description }}</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
                    <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
                </div>
                <div class="col-2,5 text-center movie-text pt-1">
                    <h2>
                        SCHEDULES
                    </h2>
                </div>
                <div class="col-4">
                  <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
                  <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
              </div>
          </div>
            <div class="row justify-content-center">
                @foreach ($movies as $movie)
                <div class="col-md-2 my-4 pb-3 text-center" style="border: 3px red solid;">
                    <h3 class="mt-4" style="font-size: 14px;">Studio</h3>
                    <h5 class="text-secondary" style="font-size: 14px;">{{ $movie->studio }}</h5>
                    <h3 class="mt-4" style="font-size: 14px;">Tanggal</h3>
                    <h5 class="text-secondary" style="font-size: 14px;">{{ Carbon\Carbon::parse($movie->tanggal)->format('d-m-Y') }}</h5>
                    <h3 class="mt-4" style="font-size: 14px;">Jam</h3>
                    @if (Auth::guest())
                        <h5 class="text-secondary" style="font-size: 14px;">{{ $movie->jam }}</h5>
                        <span class="text-right text-danger" style="font-size: 10px;">*Login Untuk Membeli Tiket</span>
                    @else
                        <a href="{{ route('seat', $movie->id_jadwal) }}" class="btn btn-danger">{{ $movie->jam }}</a>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Footer -->
<footer class="py-5 bg-dark footer">
    <div class="container-fluid">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>
@endsection
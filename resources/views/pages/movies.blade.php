@extends('layouts.home')

@section('content')
    <!-- /.container -->
  <div class="container-fluid pt-5 movies-background">
    <div class="container py-3 px-3">
        <div class="row justify-content-center">
            @foreach ($items as $item)
                <div class="col-lg-3 col-md-6 py-3">
                    <div class="card h-100">
                    <a href="{{ route('info', $item->id_movie) }}">
                        <img class="card-img-top image-home" src="{{ asset('storage/images/cover-film/'. $item->image) }}" alt="">
                    </a>
                    </div>
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
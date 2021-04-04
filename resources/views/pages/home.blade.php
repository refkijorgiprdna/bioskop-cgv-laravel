@extends('layouts.home')

@section('content')
    <!-- Page Content -->
  <div class="container-fluid header">
      <div class="container">

        <!-- Jumbotron Header -->
        
        <header class="mt-3">
            <div class="row justify-content-center ">
                <div class="col-md-7 px-1 py-1 gambar">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      @foreach ($carousel as $key => $item)
                      <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img class="d-block w-100" src="{{ asset('storage/images/carousel-film/'. $item->gambar) }}" alt="First slide" >
                      </div> 
                      @endforeach
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
            </div>
        </header>
    
        <!-- Page Features -->
        
    
      </div>
  </div>
  
  <!-- /.container -->
  <div class="container-fluid movie-selection pb-2">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-4">
                  <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
                  <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
              </div>
              <div class="col-4 text-center movie-text pt-1">
                  <h2>
                      MOVIE SELECTION
                  </h2>
              </div>
              <div class="col-4">
                <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
                <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
            </div>
        </div>
        <div class="row text-center">
          @foreach ($items as $item)
          <div class="col-lg-3 col-md-6 py-4">
              <div class="card h-100">
                  <a href="{{ route('info', $item->id_movie) }}"><img class="card-img-top image-home" src="{{ asset('storage/images/cover-film/'. $item->image) }}" alt=""></a>
              </div>
          </div>     
        @endforeach
        <!-- /.row -->
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
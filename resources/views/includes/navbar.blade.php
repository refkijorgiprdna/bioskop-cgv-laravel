<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">
      <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item mr-2">
                <a href="https://www.facebook.com/cgv.id" target="_blank"><img src="{{ url('frontend/images/fb.png') }}" alt="" style="width: 35px; height: 35px;"></a>
           </li>
           <li class="nav-item mr-2">
             <a href="https://twitter.com/cgv_id" target="_blank"><img src="{{ url('frontend/images/tw.jpg') }}" alt="" style="width: 35px; height: 35px;"></a>
           </li>
           <li class="nav-item mr-2">
             <a href="https://www.instagram.com/cgv.id/" target="_blank"><img src="{{ url('frontend/images/ig.jpg') }}" alt="" style="width: 35px; height: 35px;"></a>
           </li>
           <li class="nav-item mr-2">
             <a href="https://line.me/R/ti/p/%40cgv_id" target="_blank"><img src="{{ url('frontend/images/line.jfif') }}" alt="" style="width: 35px; height: 35px;"></a>
           </li>
           <li class="nav-item mr-2">
             <a href="https://www.youtube.com/cgvkreasi/" target="_blank"><img src="{{ url('frontend/images/yt.png') }}" alt="" style="width: 35px; height: 35px;"></a>
           </li>
         </ul>
         <ul class="navbar-nav mr-auto ml-auto">
             <li class="nav-item">
             <a href="{{ route('home') }}"><img src="{{ url('frontend/images/cgv.png') }}" alt="" style="width: 130px; height: 60px;"></a>
             </li>
         </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a class="nav-link text-dark" href="{{ route('movies') }}">MOVIES</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-dark" href="{{ route('member') }}">MEMBERSHIP</a>
          </li>
          @if (Auth::guest())
            <li class="nav-item ">
              <a class="nav-link text-dark" href="{{ route('login') }}">LOGIN</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-dark" href="{{ route('register') }}">SIGN UP</a>
            </li>

          @else
              <li class="nav-item">
                <a class="nav-link text-dark" href="{{ url('/logout') }}">LOGOUT</a>
              </li>   
          @endif
        </ul>
      </div>
    </div>
  </nav>
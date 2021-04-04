@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center mb-4">
            <a href="{{ route('data-carousel.index') }}" class="btn btn-sm btn-warning shadow-sm mb-0 mt-3">
                <i class="fas fa-arrow-left fa-sm"></i> Back
            </a>
            <h1 class="h3 mb-0 mt-3 text-black">Gambar Carousel</h1>
        </div>
    
    <form action="{{ route('data-carousel.store') }}" method="POST" class="form" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="gambar">Cover</label>
            <img id="image" src="" class="img-thumbnail">
            <input type="file" id="gambar" class="form-control-file" name="gambar" required onchange="preview_image(event)">
        </div>
        <button type="submit" class="btn btn-primary btn-block">
            Submit
        </button>
    </form>
    </div>
</div>
@endsection

@push('addon-script')
    <script>
        function preview_image(event) 
        {
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endpush

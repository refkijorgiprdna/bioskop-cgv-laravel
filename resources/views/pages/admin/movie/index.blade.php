@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 mt-3 text-black">Data Movie</h1>
        <a href="{{ route('data-movie.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Movie
            </a>
        </div>
    
        <div class="row">
            <div class="table-responsive">
                <table id="document" class="table table-bordered table-hover data" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Judul</th>
                            <th>Genre</th>
                            <th>Duration</th>
                            <th>harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @forelse ($items as $item)
                        <tr class="text-center">
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->genre }}</td>
                            <td>{{ Carbon\Carbon::parse($item->duration)->format('H') }} jam {{ Carbon\Carbon::parse($item->duration)->format('i') }} menit</td>
                            <td>{{ $item->harga }}</td>
                            <td>
                            <a href="{{ route('data-movie.edit', $item->id_movie) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top"
                                    title="Edit Data">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                            <form action="{{ route('data-movie.destroy', $item->id_movie) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom"
                                        title="Hapus Data">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
    @if (Session::get('success-tambah-movie'))
    <script>
        swal({
            title: "Berhasil",
            text: "Movie Sudah Ditambahkan",
            icon: "success",
        });
    </script>
    @endif

    @if (Session::get('success-ubah-movie'))
    <script>
        swal({
            title: "Berhasil",
            text: "Movie Sudah Diubah",
            icon: "success",
        });
    </script>
    @endif

    @if (Session::get('error-hapus'))
    <script>
        swal("Gagal Menghapus Data", "Movie Sudah Terjadwal", "error");
    </script>
    @endif

    @if (Session::get('success-hapus'))
    <script>
        swal("Berhasil Menghapus Data", "Movie Sudah Terhapus Secara Permanen", "success");
    </script>
    @endif

    <script type="text/javascript">
        $(document).ready(function(){
            $('.data').DataTable();
        });
    </script>
@endpush
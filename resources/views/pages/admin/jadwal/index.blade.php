@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 mt-3 text-black">Data Jadwal</h1>
        <a href="{{ route('data-jadwal.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Jadwal
            </a>
        </div>
    
        <div class="row">
            <div class="table-responsive">
                <table id="document" class="table table-bordered table-hover data" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Studio</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @forelse ($items as $item)
                        <tr class="text-center">
                            <td>{{ $item->movie->judul }}</td>
                            <td>{{ Carbon\Carbon::parse($item->tanggal)->format('d-m-Y') }}</td>
                            <td>{{ $item->jam }}</td>
                            <td>{{ $item->studio }}</td>
                            <td>
                            <a href="{{ route('data-jadwal.edit', $item->id_jadwal) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top"
                                    title="Edit Data">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                            <form action="{{ route('data-jadwal.destroy', $item->id_jadwal) }}" method="POST" class="d-inline">
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
    @if (Session::get('success-tambah-jadwal'))
    <script>
        swal({
            title: "Berhasil",
            text: "Jadwal Movie Sudah Ditambahkan",
            icon: "success",
        });
    </script>
    @endif

    @if (Session::get('success-ubah-jadwal'))
    <script>
        swal({
            title: "Berhasil",
            text: "Jadwal Movie Sudah Diubah",
            icon: "success",
        });
    </script>
    @endif

    @if (Session::get('error-hapus-jadwal'))
    <script>
        swal("Gagal Menghapus Data", "Jadwal Movie Telah Dipilih", "error");
    </script>
    @endif

    @if (Session::get('success-hapus-jadwal'))
    <script>
        swal("Berhasil Menghapus Data", "Jadwal Sudah Terhapus Secara Permanen", "success");
    </script>
    @endif

    {{-- <script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script> --}}
    <script type="text/javascript">
        $(document).ready(function(){
            $('.data').DataTable();
        });
    </script>
@endpush
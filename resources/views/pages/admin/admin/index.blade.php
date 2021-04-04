@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 mt-3 text-black">Data Admin</h1>
            <a href="{{ route('data-penonton.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Admin
            </a>
        </div>
    
        <div class="row">
            <div class="table-responsive">
                <table id="document"class="table table-bordered table-hover data" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Nama Admin</th>
                            <th>Email</th>
                            <th>No Handphone</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @forelse ($items as $item)
                        <tr class="text-center">
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->no_telepon }}</td>
                            <td>
                            <a href="{{ route('data-admin.show', $item->id) }}" class="btn btn-info" data-toggle="tooltip" data-placement="top"
                                title="Lihat Data">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('data-admin.edit', $item->id) }}" class="btn btn-primary" data-toggle="tooltip" data-placement="top"
                                    title="Edit Data">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                            <form action="{{ route('data-admin.destroy2', $item->id) }}" method="POST" class="d-inline">
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
    @if (Session::get('success-tambah-admin'))
    <script>
        swal({
            title: "Berhasil",
            text: "Data Admin Sudah Ditambahkan",
            icon: "success",
        });
    </script>
    @endif

    @if (Session::get('success-ubah-admin'))
    <script>
        swal({
            title: "Berhasil",
            text: "Data Admin Sudah Diubah",
            icon: "success",
        });
    </script>
    @endif

    @if (Session::get('error-hapus-admin'))
    <script>
        swal("Gagal Menghapus Data", "Data Telah Digunakan", "error");
    </script>
    @endif

    @if (Session::get('success-hapus-admin'))
    <script>
        swal("Berhasil Menghapus Data", "Data Sudah Terhapus Secara Permanen", "success");
    </script>
    @endif

    <script type="text/javascript">
        $(document).ready(function(){
            $('.data').DataTable();
        });
    </script>
@endpush
@extends('layouts.admin')

@section('content')
<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 mt-3 text-black">Laporan Transaksi</h1>
        </div>
        <form action="{{ route('transaksiLaporan2') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="tgl1">Tanggal Awal</label>
                    <input class="date form-control" type="text" name="tgl1" id="tgl1" autocomplete="off">
                </div>
                <div class="form-group col-md-4">
                    <label for="tgl2">Tanggal Akhir</label>
                    <input class="date form-control" type="text" name="tgl2" id="tgl2" autocomplete="off">
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-outline-success">Cetak Laporan</button>
                </div>
            </div>
        </form>
        
        <form action="{{ route('transaksiLaporan') }}" class="d-sm-flex align-items-center justify-content-start mb-4">
            @csrf
            <button class="btn btn-outline-success ml-auto" type="submit">Cetak Semua Laporan</button>
        </form>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Movie</th>
                            <th>Kursi</th>
                            <th>Harga Total</th>
                            <th>Jadwal Movie</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @forelse ($items as $item)
                        <tr class="text-center">
                            <td>{{ $item->id_transaksi }}</td>
                            <td>{{ Carbon\Carbon::parse($item->tgl_transaksi)->format('d-m-Y') }}</td>
                            <td>{{ $item->user->name }}</td>                        
                            <td>{{ $item->movie->judul }}</td>
                            <td>
                            @foreach ($item->kursis as $seat)
                                {{ $seat->seat_id_kursi }}
                            @endforeach        
                            </td>                                                                           
                            <td>{{ $item->total_harga }}</td>
                            <td>{{ $item->jadwal->studio }} , Tanggal {{ Carbon\Carbon::parse($item->jadwal->tanggal)->format('d M Y') }}, Jam {{ $item->jadwal->jam }}</td>
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
    @if (Session::get('success-hapus-transaksi'))
    <script>
        swal({
            title: "Berhasil",
            text: "Transaksi Sudah Dihapus",
            icon: "success",
        });
    </script>
    @endif

    @if (Session::get('error-tanggal'))
      <script>
          swal("Error", "Format Tanggal Salah", "error");
      </script>
    @endif

    @if (Session::get('error-kosong'))
      <script>
          swal("Warning", "Data Tidak Ditemukan Pada Tanggal Tersebut", "warning");
      </script>
    @endif

    @if (Session::get('error-kosong1'))
      <script>
          swal("Warning", "Data Masih Kosong", "warning");
      </script>
    @endif

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <script type="text/javascript">
        $('.date').datepicker({  
            format: 'yyyy-mm-dd',
            autoclose: true,
            clearBtn: true
        }); 
    </script>
@endpush
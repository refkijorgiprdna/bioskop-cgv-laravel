<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="title">
            <h4 class="text-center pt-2">CGV CINEMAS</h4>
        </div>
    
        <div class="clear"></div>

        <hr style="border: 2px solid #000;">

        <h5 class="text-center mt-3">Laporan Transaksi</h5>

        <div class="row mt-3">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0" style="border: 1px #000 solid;">
                    <thead>
                        <tr class="text-center align-items-center">
                            <th style="border: 1px #000 solid;">No</th>
                            <th style="border: 1px #000 solid;">Tanggal Transaksi</th>
                            <th style="border: 1px #000 solid;">Nama</th>
                            <th style="border: 1px #000 solid;">Movie</th>
                            <th style="border: 1px #000 solid;">Data Kursi</th>
                            <th style="border: 1px #000 solid;">Harga Total</th>
                            <th style="border: 1px #000 solid;">Jadwal Movie</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @php
                        $no = 0;
                        @endphp
                        @forelse ($items as $item)
                        @php
                        $no++;
                        @endphp
                        <tr class="align-items-center">
                            <th class="text-center" style="border: 1px #000 solid;">{{ $no }}</th>
                            <td class="text-center" style="border: 1px #000 solid;">{{ Carbon\Carbon::parse($item->tgl_transaksi)->format('d M Y') }}</td>
                            <td class="text-center" style="border: 1px #000 solid;">{{ Auth::user()->name }}</td>
                            <td class="text-center" style="border: 1px #000 solid;">{{ $item->movie->judul }}</td>
                            <td class="text-center" style="border: 1px #000 solid;">
                                @foreach ($item->kursis as $seat)
                                    {{ $seat->seat_id_kursi }}
                                @endforeach        
                            </td> 
                            <td class="text-center" style="border: 1px #000 solid;">{{ $item->total_harga }}</td>
                            <td class="text-center" style="border: 1px #000 solid;">{{ $item->jadwal->studio }} , Tanggal {{ Carbon\Carbon::parse($item->jadwal->tanggal)->format('d M Y') }}, Jam {{ $item->jadwal->jam }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center">
                                Data laporan Kosong
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
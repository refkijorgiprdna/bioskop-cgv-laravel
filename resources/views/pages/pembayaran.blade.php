@extends('layouts.home')

@section('content')
@foreach ($items as $item)
<div class="container-fluid mt-5 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
                <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
            </div>
            <div class="col-4 text-center movie-text pt-1">
                <h2>
                    SELECT PAYMENT
                </h2>
            </div>
            <div class="col-4">
              <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
              <hr style="height:2px; border-width:0;color:#000; background-color:#000; ">
            </div>
        </div>
        <div class="row justify-content-center">
            <p>
                <a class="btn btn-danger" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Debit Transfer</a>
                <a class="btn btn-danger" data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Others</a>
            </p>
        </div> 
    <form action="{{ route('bayar', $item->id_transaksi) }}">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="collapse show" id="multiCollapseExample1">
                        <div class="card card-body">
                            <hr style="height:1px; border-width:0;color:#000; background-color:#000; ">
                            <div class="form-group row justify-content-between">
                                <label for="bank" class="col-2 col-form-label">Bank List</label>
                                <select name="bank" id="bank" class="form-control col-4 text-right">
                                    <option value="null">--Select VA Bank Account--</option>
                                    <option value="bca">Bank Central Asia</option>
                                    <option value="bri">Bank Rakyat Indonesia</option>
                                </select>
                            </div>
                            <hr style="height:1px; border-width:0;color:#000; background-color:#000; ">
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="collapse" id="multiCollapseExample2">
                        <div class="card card-body">
                            <hr style="height:1px; border-width:0;color:#000; background-color:#000; ">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" id="exampleRadios1" value="alfamart" name="bank">
                                <label class="form-check-label" for="exampleRadios1">
                                    <h1 class="text-hide"><img src="{{ url('frontend/images/alfamart.png') }}" alt="" style="width:15%;">Bootstrap</h1>
                                </label>
                            </div>
                            <hr style="height:1px; border-width:0;color:#000; background-color:#000; ">
                            <div class="form-check mb-0">
                                <input class="form-check-input" type="checkbox" id="exampleRadios2" value="indomaret" name="bank">
                                <label class="form-check-label" for="exampleRadios2">
                                    <h1 class="text-hide"><img src="{{ url('frontend/images/indomaret.png') }}" alt="" style="width:15%;">Bootstrap</h1>
                                </label>
                            </div>
     
                            <hr style="height:1px; border-width:0;color:#000; background-color:#000; ">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-2 my-3 text-center px-0 py-0" style="border: 3px rgb(0, 0, 0) solid; border-radius: 10px;">
                    <h3 class="mt-2" style="font-size: 20px;">Total</h3>
                    <h5 class="bg-dark text-white py-2 mb-0" style="font-size: 20px;">Rp{{ format_uang($item->total_harga) }},00</h5>  
                </div>
            </div>   
            <div class="container-fluid bg-dark text-white" style="border-radius: 10px;">
                <div class="row justify-content-between">
                    <div class="col-md-2 py-2">
                        <a href="{{ route('batal-pesan-tiket', $item->id_transaksi) }}" class="btn btn-info" style="font-size: 20px;"><i class="fas fa-backward"></i> <br> Kembali</a>
                    </div>
                    <div class="col-md-2 py-2">
                        <button type="submit" class="btn btn-danger bayar-confirm" style="font-size: 20px;">
                            <i class="fas fa-forward"></i> <br> Bayar
                        </button>
                    </div>
                </div>
            </div> 
        </form>
    </div>
</div>


@endforeach
     <!-- Footer -->
    <footer class="py-5 bg-dark footer-info">
        <div class="container-fluid">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
        </div>
     <!-- /.container -->
    </footer>
@endsection

@push('addon-script')
<script>
    $('#multiCollapseExample1').on('show.bs.collapse', function () {
        $('#multiCollapseExample2').collapse('hide');
    });
    $('#multiCollapseExample2').on('show.bs.collapse', function () {
        $('#multiCollapseExample1').collapse('hide');
    });

    $('.bayar-confirm').on('click', function () {
        var value = document.getElementById('bank').val();
        if( value == null) {
            alert('Pilih metode pembayaran');
            return false;
        }else {
            return true;
        }
    });
</script>

    @if (Session::get('error-bank'))
    <script>
        swal({
            title: "Error",
            text: "Silahkan pilih metode pembayaran terlebih dahulu",
            icon: "warning",
        });
    </script>
    @endif
@endpush
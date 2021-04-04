@extends('layouts.home')

@section('content')
    <!-- Page Content -->
    @foreach ($items as $item)
    <div class="container-fluid header info-background" style="padding-top: 80px; padding-bottom: 80px;">
        <div class="container col-4 ">
          <div class="card">
              <div class="card-body">
                  <div class="form-group row " >
                        <div class="col-2"></div>
                        <div class="col-4" style="border: 1px red solid;">
                            ID Transaksi 
                         </div>
                        <div class="col-5" style="border: 1px red solid;">
                            {{ $item->id_transaksi }}
                        </div>
                  </div>
                  <div class="form-group row">
                        <div class="col-2"></div>
                        <div class="col-4" style="border: 1px red solid;">
                            Bank
                        </div>
                        <div class="col-5" style="border: 1px red solid;">
                            {{ $bank }}
                        </div>
                  </div>
                  <div class="form-group row" >
                        <div class="col-2"></div>
                        <div class="col-4" style="border: 1px red solid;">
                             No Rekening
                        </div>
                        <div class="col-5" style="border: 1px red solid;">
                            {{ $rekening }}
                        </div>
                  </div>
                  <div class="form-group row " >
                    <div class="col-2"></div>
                    <div class="col-4" style="border: 1px red solid;">
                        A/N
                     </div>
                    <div class="col-5" style="border: 1px red solid;">
                        CGV 
                    </div>
              </div>
                  <div class="form-group row">
                        <div class="col-2"></div>
                        <div class="col-4" style="border: 1px red solid;">
                          Total
                        </div>
                        <div class="col-5" style="border: 1px red solid;">
                            Rp. {{ format_uang($item->total_harga) }},00
                        </div>
                  </div>
              </div>
          </div>
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
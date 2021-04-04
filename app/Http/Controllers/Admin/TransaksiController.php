<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\User;
use App\Models\Jadwal;
use App\Models\Movie;
use PDF;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Transaksi::all();
        return view('pages.admin.transaksi.index', [
            'items' => $items
        ]);
    }

    public function transaksi() 
    {
        $items = Transaksi::all();
        $count = $items->count();

        if($count < 1) {
          return redirect()->back()->with('error-kosong1','Error');
        }else {
          $pdf = PDF::loadview('pages.laporan.transaksi', [
            'items' => $items
          ])->setPaper('legal','landscape');
          return $pdf->download('laporan-transaksi.pdf');
        }
    }

    public function transaksi2(Request $request) 
    {
        $tgl1 = $request->get('tgl1');
        $tgl2 = $request->get('tgl2');

        if($tgl1 > $tgl2 || $tgl1 == null || $tgl2 == null) {
          return redirect()->back()->with('error-tanggal','Error');
        }else {
          $item = Transaksi::all(); 
          $items = $item->whereBetween('tgl_transaksi', [$tgl1, $tgl2]);
          $count = $items->count();

          if($count < 1) {
            return redirect()->back()->with('error-kosong','Error');
          }else {
            $pdf = PDF::loadview('pages.laporan.transaksi', [
              'items' => $items
            ])->setPaper('legal','landscape');
            return $pdf->download('laporan-transaksi.pdf');
          }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $item = Transaksi::findOrFail($id);

        // $item -> delete();
        // return redirect()->route('data-transaksi.index')->with('success-hapus-transaksi','Sukses');
    }
}

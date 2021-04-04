<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\User;
use App\Models\Jadwal;
use App\Models\Seat;
use App\Models\Transaksi;
use App\Models\Carousel;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index()
    {
        $items = Movie::paginate(4);
        $carousel = Carousel::all();
        return view('pages.home', [
            'items' => $items, 'carousel' => $carousel
        ]);
    }
 
    public function movies()
    {
        $items = Movie::all();
        return view('pages.movies', [
            'items' => $items
        ]);
    }
 
    public function info($id)
    {
        $item = Movie::find($id);
        $movies = Jadwal::where('id_movie', '=', $id)->get();
        return view('pages.info', [
            'item' => $item, 'movies' => $movies
        ]);
    }

    public function seat($id)
    {
        $item = Jadwal::findOrFail($id);
        $movie = $item->id_jadwal;
        $check = Seat::join('tb_transaksi', 'tb_kursi.transaksi_id_transaksi', '=', 'tb_transaksi.id_transaksi')->where('jadwal_id', '=', $movie)->pluck('seat_id_kursi');
        return view('pages.seat', [
            'item' => $item, 'check' => $check
        ]);
    }

    public function member(Request $request)
    {
        if($request->user()){
            $id = $request->user()->id;
            $items = Transaksi::where('user_id', '=', $id)->get();
            return view('pages.member', [
                'items' => $items
            ]);
        }else {
            return view('pages.member');
        }
    }

    public function cgv_card(Request $request)
    {
        $id = $request->user()->id;
        $items = Transaksi::where('user_id', '=', $id)->get();
        return view('pages.cgv_card', [
            'items' => $items
        ]);
    }

    public function pesan_tiket(Request $request, $id)
    {
        $time = Carbon::now();
        $times = $time->toTimeString();
        $movie = $request->movie_id;
        $user = $request->user_id;
        $jadwal = $request->jadwal_id;
        $harga = $request->total_harga;
        $tgl = Carbon::now();
        $buku = array();
        if($files=$request->no_kursi){
            foreach ($files as $file) {
                $buku[]=$file;
            }
        }
        $transaksi = new Transaksi;
        $transaksi -> user_id = $user;
        $transaksi -> jadwal_id = $jadwal;
        $transaksi -> movie_id = $movie;
        $transaksi -> total_harga = $harga;
        $transaksi -> tgl_transaksi = $tgl;
        $transaksi -> waktu = $times;
        $transaksi -> save();

        $idTransaksi = $transaksi->id_transaksi;

        foreach ($buku as $bu) {
            $transaksi->kursi()->attach($bu);
        }
        return redirect() -> route('pembayaran', $idTransaksi);
    }

    public function pembayaran($id)
    {
        $items = Transaksi::where('id_transaksi', '=', $id)->get();
        return view ('pages.pembayaran', [
            'items' => $items
        ]);
    }

    public function cancel_pemesanan($id) 
    {
        $item = Transaksi::findOrFail($id);
        $item->delete();
        $movie = $item->movie_id;
        return redirect() -> route('seat', $movie);
    }

    public function bayar(Request $request, $id)
    {
        if($request->has('bank')) {
            $data = $request->bank;
            $bank1 = "Bank Rakyat Indonesia";
            $bank2 = "Bank Central Asia";
            $bank3 = "Alfamart";
            $bank4 = "Indomaret";
            $rekening1 = "8878800009751853";
            $rekening2 = "7811701000852949";
            $rekening3 = "0110030364390530";
            $rekening4 = "2466853853666666";
            $items = Transaksi::where('id_transaksi', '=', $id)->get();
            if($data == 'bri'){
                return view('pages.bri', [
                    'items' => $items, 'bank' => $bank1, 'rekening' => $rekening1
                ]);
            }
            if($data == 'bca'){
                return view('pages.bri', [
                    'items' => $items, 'bank' => $bank2, 'rekening' => $rekening2
                ]);
            }
            if($data == 'alfamart'){
                return view('pages.bri', [
                    'items' => $items, 'bank' => $bank3, 'rekening' => $rekening3
                ]);
            }
            if($data == 'indomaret'){
                return view('pages.bri', [
                    'items' => $items, 'bank' => $bank4, 'rekening' => $rekening4
                ]);
            }
            if($data == 'null'){
                return redirect()->back()->with('error-bank','Error');
            }
        }
    }
}

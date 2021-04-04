<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Movie;
use App\Models\Transaksi;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Jadwal::all();
        return view('pages.admin.jadwal.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movies = Movie::all();
        return view('pages.admin.jadwal.create', [
            'movies' => $movies
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $tgl = $request->tanggal;
        $jam = $request->jam;
        $studio = $request->studio;
        $check = Jadwal::where('tanggal', '=', $tgl)->where('jam', '=', $jam)->where('studio', '=', $studio)->first();
        if($check === null) {
            Jadwal::create($data);
            return redirect()->route('data-jadwal.index')->with('success-tambah-jadwal','Sukses');
        }else {
            return redirect()->back()->withInput()->with('error-tambah-jadwal', 'Error');
        }        
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
        $item = Jadwal::findOrFail($id);
        $movies = Movie::all();
        return view('pages.admin.jadwal.edit', [
            'item' => $item, 'movies' => $movies
        ]);
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
        $data = $request->all();
        $item = Jadwal::find($id);
        $tgl2 = $item->tanggal;
        $jam2 = $item->jam;
        $studio2 = $item->studio;
        $tgl = $request->tanggal;
        $jam = $request->jam;
        $studio = $request->studio;
        $check = Jadwal::where('tanggal', '=', $tgl)->where('jam', '=', $jam)->where('studio', '=', $studio)->first();
        if($check === null || ((strtolower($tgl2)==strtolower($tgl)) && (strtolower($jam2)==strtolower($jam)) && (strtolower($studio2)==strtolower($studio)))) {
            $item->update($data);
            return redirect()->route('data-jadwal.index')->with('success-ubah-jadwal','Sukses');
        }else {
            return redirect()->back()->withInput()->with('error-ubah-jadwal', 'Error');
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Jadwal::findOrFail($id);

        $data2 = Transaksi::where('jadwal_id', '=', $id)->first();
        
        if ($data2 === null) {
            $item->delete();
            return redirect() -> route('data-jadwal.index') -> with('success-hapus-jadwal','Berhasil');
        }else {
            return redirect() -> route('data-jadwal.index') -> with('error-hapus-jadwal','Gagal');
        }
    }
}
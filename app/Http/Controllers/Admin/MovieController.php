<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Jadwal;
use App\Models\Transaksi;
use App\Http\Requests\MovieRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Movie::all();
        return view('pages.admin.movie.index', [
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
        return view('pages.admin.movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request-> all();

        $file = $request->file('image');

        $judul = $request->judul;
        $check = Movie::where('judul', '=', $judul)->first();

        if($check === null) {
            if ($request->has('image')) {
                $extension = $file->extension();
                $imageNames = uniqid('img_', microtime()).'.'.$extension;
                Storage::putFileAs('public/images/cover-film', $file, $imageNames);
                $thumbnailpath = public_path('storage/images/cover-film/'.$imageNames);
                $img = Image::make($thumbnailpath)->resize(325, 500)->save($thumbnailpath);
            }
            Movie::insert([
                'judul' => $data['judul'],
                'starring' => $data['starring'],
                'genre' => $data['genre'],
                'language' => $data['language'],
                'subtitle' => $data['subtitle'],
                'duration' => $data['duration'],
                'harga' => $data['harga'],
                'image' => $imageNames,
                'description' => $data['description']
            ]);
            return redirect()->route('data-movie.index')->with('success-tambah-movie','Sukses');
        }else {
            return redirect()->back()->with('error-tambah-movie','Error');
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
        $item = Movie::findOrFail($id);
        return view('pages.admin.movie.edit', [
            'item' => $item
        ]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MovieRequest $request, $id)
    {
        $data = $request->all();
        $item = Movie::findOrFail($id);
        $judul2 = $item->judul;
        $judul = $request->judul;
        $check = Movie::where('judul', '=', $judul)->first();

        $imageName = null;
        $filename  = ('public/images/cover-film/').$item-> image;
        $file = $request->file('image');

        if($check === null || ((strtolower($judul2)==strtolower($judul)))) {
            if ($request->has('image')) {
                $extension = $file->extension();
                $imageNames = uniqid('img_', microtime()).'.'.$extension;
                Storage::delete($filename);
                Storage::putFileAs('public/images/cover-film', $file, $imageNames);
                $imageName = $imageNames;
                $thumbnailpath = public_path('storage/images/cover-film/'.$imageNames);
                $img = Image::make($thumbnailpath)->resize(325, 500)->save($thumbnailpath);
                
            }else{
                $namaFile = $item-> image;
                $imageName = $namaFile;
            }

            $item -> update ([
                'judul' => $data['judul'],
                'starring' => $data['starring'],
                'genre' => $data['genre'],
                'language' => $data['language'],
                'subtitle' => $data['subtitle'],
                'duration' => $data['duration'],
                'harga' => $data['harga'],
                'image' => $imageName,
                'description' => $data['description']
            ]);
            return redirect()->route('data-movie.index')->with('success-ubah-movie','Sukses');
        }else {
            return redirect()->back()->with('error-ubah-movie','Error');
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
        $item = Movie::findOrFail($id);

        $data = Jadwal::where('id_movie', '=', $id)->first();
        $data2 = Transaksi::where('movie_id', '=', $id)->first();
        
        if ($data === null && $data2 === null) {
            $item->delete();
            return redirect() -> route('data-movie.index') -> with('success-hapus','Berhasil');
        }else {
            return redirect() -> route('data-movie.index') -> with('error-hapus','Gagal');
        }
    }
}

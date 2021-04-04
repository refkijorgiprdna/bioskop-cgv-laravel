<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Carousel::all();
        return view('pages.admin.carousel.index', [
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
        return view('pages.admin.carousel.create');
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

        $file = $request->file('gambar');

        if ($request->has('gambar')) {
            $extension = $file->extension();
            $imageNames = uniqid('img_', microtime()).'.'.$extension;
            Storage::putFileAs('public/images/carousel-film', $file, $imageNames);
            $thumbnailpath = public_path('storage/images/carousel-film/'.$imageNames);
            $img = Image::make($thumbnailpath)->resize(3000, 1500)->save($thumbnailpath);
        }
        Carousel::insert([
            'gambar' => $imageNames,
        ]);
        return redirect()->route('data-carousel.index')->with('success-tambah-carousel','Sukses');

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
        $item = carousel::findOrFail($id);

        $item -> delete();
        return redirect()->route('data-carousel.index')->with('success-hapus-carousel','Sukses');
    }
}

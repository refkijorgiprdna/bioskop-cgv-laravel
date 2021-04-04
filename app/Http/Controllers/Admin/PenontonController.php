<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PenontonRequest;
use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Hash;

class PenontonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::where('roles', '=', 'USER')->get();
        return view('pages.admin.penonton.index', [
            'items' => $items
        ]);
    }

    public function index2()
    {
        $items = User::where('roles', '=', 'ADMIN')->get();
        return view('pages.admin.admin.index', [
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
        return view('pages.admin.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PenontonRequest $request)
    {
        $admin = 'ADMIN';

        $email = $request->email;
        $check = User::where('email', '=', $email)->first();
        if($check === null) {
            User::insert([
                'tgl_lahir' => $request->tgl_lahir,
                'jk' => $request->jk,
                'alamat' => $request->alamat,
                'no_telepon' => $request->no_telepon,
                'name' => $request->name,
                'password' => Hash::make($request->password),
                'roles' => $admin,
                'email' => $email    
            ]);
            return redirect()->route('data-admin.index')->with('success-tambah-admin','Sukses');
        }else {
            return redirect()->back()->withInput()->with('error-tambah-admin','Error');
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
        $item = User::findOrFail($id);
        return view('pages.admin.penonton.show', [
            'item' => $item
        ]);
    }

    public function show2($id)
    {
        $item = User::findOrFail($id);
        return view('pages.admin.admin.show', [
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = User::findOrFail($id);
        return view('pages.admin.penonton.edit', [
            'item' => $item
        ]);
    }

    public function edit2($id)
    {
        $item = User::findOrFail($id);
        return view('pages.admin.admin.edit', [
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
    public function update(PenontonRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'alamat' => $request->get('alamat'), 
            'tgl_lahir' => $request->get('tgl_lahir'),
            'jk' => $request->get('jk'),
            'no_telepon' => $request->get('no_telepon'),
            'roles' => $request->get('roles')
        ]);

        return redirect()->route('data-penonton.index')->with('success-ubah-penonton','Sukses');
    }

    public function upd(PenontonRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $role = $request->roles;

        $user->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'alamat' => $request->get('alamat'), 
            'tgl_lahir' => $request->get('tgl_lahir'),
            'jk' => $request->get('jk'),
            'no_telepon' => $request->get('no_telepon'),
            'roles' => $request->get('roles')
        ]);

        return redirect()->route('data-admin.index')->with('success-ubah-admin','Sukses');

        // if($role == 'ADMIN'){
        //     return redirect()->route('data-admin.index');
        // }if($role == 'USER'){
        //     return redirect()->route('data-penonton.index');
        // }else {
        //     return redirect()->route('dashboard');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = User::findOrFail($id);

        $data2 = Transaksi::where('user_id', '=', $id)->first();
        
        if ($data2 === null) {
            $item->delete();
            return redirect() -> route('data-penonton.index') -> with('success-hapus-penonton','Berhasil');
        }else {
            return redirect() -> route('data-penonton.index') -> with('error-hapus-penonton','Gagal');
        }
    }

    public function destroy2($id)
    {
        $item = User::findOrFail($id);

        $data2 = Transaksi::where('user_id', '=', $id)->first();
        
        if ($data2 === null) {
            $item->delete();
            return redirect() -> route('data-admin.index') -> with('success-hapus-admin','Berhasil');
        }else {
            return redirect() -> route('data-admin.index') -> with('error-hapus-admin','Gagal');
        }
    }
}

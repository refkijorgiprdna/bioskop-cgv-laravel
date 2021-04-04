<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        return view('pages.edit', [
            'user' => $request->user()
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'tgl_lahir' => ['required', 'date' , 'before:today'],
            'no_telepon' => ['required', 'numeric', 'digits_between:11,13'],
        ]);
        $request->user()->update(
            $request->all()
        );
        return redirect()->route('cgv_card');
    }

    
}

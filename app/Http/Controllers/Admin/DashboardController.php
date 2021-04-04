<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Movie;
use App\Models\Jadwal;
use App\Models\Transaksi;


class DashboardController extends Controller
{
    public function index() 
    {
        $user = User::where('roles', '=', 'USER')->count();
        $movie = Movie::count();
        $jadwal = Jadwal::count();
        $transaksi = Transaksi::count();
        return view('pages.admin.dashboard', [
            'user' => $user, 'movie' => $movie, 'jadwal' => $jadwal, 'transaksi' => $transaksi
        ]);
    }
}

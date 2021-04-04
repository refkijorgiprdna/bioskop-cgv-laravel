<?php

use Illuminate\Support\Facades\Route;

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'PageController@index')->name('home');

Route::get('/membership', 'PageController@member')->name('member');

Route::get('/membership/cgv_card', 'PageController@cgv_card')->name('cgv_card');
 
Route::get('/movies', 'PageController@movies')->name('movies');
 
Route::get('/movies/{id}/info', 'PageController@info')->name('info');

Route::get('/movies/info/seat/{id}/', 'PageController@seat')->name('seat');

Route::get('/movies/info/seat/{id}/pesan', 'PageController@pesan_tiket')->name('pesan-tiket');

Route::get('/movies/info/{id}/pesan/pembayaran', 'PageController@pembayaran')->name('pembayaran');

Route::get('/movies/info/seat/{id}/batal-pesan', 'PageController@cancel_pemesanan')->name('batal-pesan-tiket');

Route::get('/movies/info/seat/{id}/bayar', 'PageController@bayar')->name('bayar');

Route::get('profile', 'ProfileController@edit')->name('profile.edit');

Route::put('profile', 'ProfileController@update')->name('profile.update');

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', 'Admin\DashboardController@index')->name('dashboard'); 

        Route::get('/data-transaksi/laporan', 'Admin\TransaksiController@transaksi')->name('transaksiLaporan');

        Route::get('/data-transaksi/laporan-tanggal', 'Admin\TransaksiController@transaksi2')->name('transaksiLaporan2');

        Route::get('/data-admin', 'Admin\PenontonController@index2')->name('data-admin.index'); 

        Route::put('/data-admin/{id}', 'Admin\PenontonController@upd')->name('data-admin.update'); 

        Route::get('/data-admin/{id}/edit', 'Admin\PenontonController@edit2')->name('data-admin.edit'); 

        Route::delete('/data-admin/{id}/delete', 'Admin\PenontonController@destroy2')->name('data-admin.destroy2'); 

        Route::get('/data-admin/{id}/show', 'Admin\PenontonController@show2')->name('data-admin.show'); 

        Route::resource('data-penonton', 'Admin\PenontonController');

        Route::resource('data-movie', 'Admin\MovieController'); 

        Route::resource('data-jadwal', 'Admin\JadwalController');
        
        Route::resource('data-transaksi', 'Admin\TransaksiController');

        Route::resource('data-carousel', 'CarouselController');

    });
Auth::routes(['verify' => true]);



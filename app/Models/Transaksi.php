<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public $table = 'tb_transaksi';

    protected $primaryKey = 'id_transaksi';

    protected $fillable = [ 
        'id_transaksi', 'tgl_transaksi', 'user_id', 'jadwal_id', 'movie_id', 'total_harga', 'waktu'
    ];

    public function movie() 
    {
        return $this->hasOne(Movie::class, 'id_movie','movie_id');
    }

    public function jadwal() 
    {
        return $this->hasOne(Jadwal::class, 'id_jadwal','jadwal_id');
    }

    public function user() 
    {
        return $this->hasOne(User::class, 'id','user_id');
    }

    public function kursis() 
    {
        return $this->hasMany(Seat::class, 'transaksi_id_transaksi','id_transaksi');
    }

    public function kursi()
    {
        return $this->belongsToMany(Seat::class, 'tb_kursi');
    }
    public static function boot() {
        parent::boot();

        static::deleting(function($transaksi) { // before delete() method call this
            $transaksi->kursi()->detach();
        });
    }
}

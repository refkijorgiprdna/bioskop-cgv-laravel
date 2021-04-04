<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    public $table = 'tb_jadwal';

    protected $primaryKey = 'id_jadwal';

    protected $fillable = [ 
        'id_jadwal', 'id_movie', 'tanggal', 'jam', 'studio'
    ];

    public function movie() 
    {
        return $this->hasOne(Movie::class, 'id_movie','id_movie');
    }

    public function transaksi() 
    {
        return $this->belongsTo(Transaksi::class, 'id_jadwal','jadwal_id');
    }
}


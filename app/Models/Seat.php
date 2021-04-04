<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    public $table = 'tb_kursi';

    protected $primaryKey = 'id_kursi';

    protected $fillable = [ 
        'id_kursi', 'transaksi_id_transaksi', 'seat_id_kursi'
    ];

    public function transaksi() 
    {
        return $this->hasOne(Transaksi::class, 'id_transaksi','transaksi_id_transaksi');
    }

    public function transaksis() 
    {
        return $this->belongsTo(Transaksi::class, 'transaksi_id_transaksi','id_transaksi');
    }
}

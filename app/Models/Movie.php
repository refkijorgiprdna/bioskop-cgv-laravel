<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public $table = 'tb_movie';

    protected $primaryKey = 'id_movie';

    protected $fillable = [ 
        'id_movie','judul','starring','genre','language','subtitle','duration','harga','description', 'image'
    ];

    public function jadwal() 
    {
        return $this->belongsTo(Jadwal::class, 'id_movie','id_movie');
    }
}

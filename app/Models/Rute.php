<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    protected $table = 'rute';

    protected $fillable = [
        'kode',
        'kategori_angkutan_id',
        'asal',
        'tujuan',
        'jam',
        'tarif',
        'status',
    ];

    public function kategoriAngkutan()
    {
        return $this->belongsTo(KategoriAngkutan::class, 'kategori_angkutan_id');
    }
}

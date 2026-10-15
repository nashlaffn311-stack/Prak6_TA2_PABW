<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriAngkutan extends Model
{
    protected $table = 'kategori_angkutan';
    protected $fillable = ['jenis_angkutan', 'deskripsi'];

    public function rute()
    {
        return $this->hasMany(Rute::class, 'kategori_angkutan_id');
    }
}

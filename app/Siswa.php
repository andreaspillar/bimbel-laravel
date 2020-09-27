<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $primaryKey = 'id_siswa';
    protected $fillable = [
        'nama_siswa', 'alamat', 'nomor_handphone', 'tanggal_lahir'
    ];

    public function kelas()
    {
        return $this->belongToMany('App\Models\Kelas');
    }
}

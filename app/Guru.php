<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $primaryKey = 'id_guru';
    protected $fillable = [
        'nama_guru', 'alamat', 'nomor_handphone', 'tanggal_lahir'
    ];
}

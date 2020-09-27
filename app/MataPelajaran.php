<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    protected $primaryKey = 'id_mapel';
    protected $fillable = ['nama_mapel'];

    public function kelas()
    {
        return $this->belongToMany('App\Models\Kelas');
    }
}

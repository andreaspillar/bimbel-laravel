<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    protected $primaryKey = 'id_absensi';
    protected $fillable = ['id_kelas', 'nilai'];
}

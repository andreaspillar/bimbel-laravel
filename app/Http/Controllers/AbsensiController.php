<?php

namespace App\Http\Controllers;

use App\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $absen = Absensi::join('kelas','kelas.id_kelas','=','absensis.id_kelas')
                    ->join('siswas','siswas.id_siswa', '=', 'kelas.id_siswa')
                    ->join('mata_pelajarans','mata_pelajarans.id_mapel', '=', 'kelas.id_mapel')->get();
        return view('absen/all', compact('absen'));        
    }

    public function create()
    {
        return view('absen/new');
    }

    public function nilai($kelas)
    {
        return view('absen/new', compact('kelas'));
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'id_kelas' => 'required',
            'tanggal_absen' => 'required|unique:absensis',
            'nilai' => 'required',
        ]);
        $absen = new Absensi();
        $absen->id_kelas = $request->id_kelas;
        $absen->tanggal_absen = $request->tanggal_absen;
        $absen->nilai = $request->nilai;
        $absen->save();
        return redirect('absen/');
    }

    public function show($absensi)
    {
        $absen = Absensi::where('id_absensi', $absensi)->get();
        return view('absen/all', compact('absen'));
    }

    public function edit($absensi)
    {
        $absen = Absensi::where('id_absensi', $absensi)->get();
        return view('absen/edit', compact('absen'));
    }

    
    public function update(Request $request, $absensi)
    {
        $student = Absensi::where('id_absensi', $absensi)
            ->update([
                'nilai' => $request->nilai,
        ]);
        return redirect('absen/');
    }


    public function destroy(Absensi $absensi)
    {
        //
    }
}

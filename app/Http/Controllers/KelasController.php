<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::join('siswas', 'kelas.id_siswa', '=', 'siswas.id_siswa' )
                    ->join('mata_pelajarans', 'kelas.id_mapel', '=', 'mata_pelajarans.id_mapel' )
                    ->get();
        return view('kelas/all', compact('kelas'));
    }

    public function create()
    {
        return view('kelas/new');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'id_mapel' => 'required',
            'id_siswa' => 'required', 
        ]);
        $kelas = new Kelas();
        $kelas->id_mapel = $request->id_mapel;
        $kelas->id_siswa = $request->id_siswa;
        $kelas->save();
        return redirect('kelas/');
    }

    public function show(Kelas $kelas)
    {
        
    }

    public function edit(Kelas $kelas)
    {
        
    }

    public function update(Request $request, Kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        //
    }
}

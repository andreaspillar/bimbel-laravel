<?php

namespace App\Http\Controllers;

use App\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function index()
    {
        $mapel = MataPelajaran::all();
        return view('mapel/all', compact('mapel'));
    }

    
    public function create()
    {
        return view('mapel/new');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'nama_mapel' => 'required',
        ]);
        $mapel = new MataPelajaran();
        $mapel->nama_mapel = $request->nama_mapel;
        $mapel->save();
        return redirect('mapel/');
    }

    public function show(MataPelajaran $mataPelajaran)
    {
        $mapel = MataPelajaran::find($mataPelajaran);
        return view('mapel/all', compact('mapel'));
    }

    public function edit($mataPelajaran)
    {
        $mapel = MataPelajaran::where('id_mapel', $mataPelajaran)->get();
        return view('mapel/edit', compact('mapel'));
    }

    public function update(Request $request, $mapel)
    {
        $mapel = MataPelajaran::find($mapel);
        $mapel->nama_mapel = $request->nama_mapel;
        $mapel->save();
        return redirect('mapel/');
    }


    public function destroy(MataPelajaran $mataPelajaran)
    {
        
    }

    public function chooseUnique(MataPelajaran $mataPelajaran)
    {
        # code...
    }
}

<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $students = Siswa::all();
        return view('siswa/all', compact('students'));
    }

    public function create()
    {
        return view('siswa/new');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'nama_siswa' => 'required',
            'alamat' => 'required',
            'nomor_handphone' => ['required','unique:siswas'],
            'tanggal_lahir' => 'required', 
        ]);
        $student = new Siswa();
        $student->nama_siswa = $request->nama_siswa;
        $student->alamat = $request->alamat;
        $student->nomor_handphone = $request->nomor_handphone;
        $student->tanggal_lahir = $request->tanggal_lahir;
        $student->save();
        return redirect('siswa/');
    }

    public function show(Siswa $siswa)
    {
        $students = Siswa::find($siswa);
        return view('siswa/all', compact('students'));
    }

    public function edit(Siswa $siswa)
    {
        $student = Siswa::find($siswa);
        return view('siswa/edit', compact('student'));
    }

    public function update(Request $request, $siswa)
    {
        $student = Siswa::where('id_siswa', $siswa)
            ->update([
                'nama_siswa' => $request->nama_siswa,
                'alamat' => $request->alamat,
                'nomor_handphone' => $request->nomor_handphone,
                'tanggal_lahir' => $request->tanggal_lahir,
        ]);
        return redirect('siswa/');
    }

    public function destroy(Siswa $siswa)
    {
    }
}

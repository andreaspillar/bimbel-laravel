<?php

namespace App\Http\Controllers;

use App\Guru;
use App\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('guru/all', compact('guru'));
    }

    public function create()
    {
        return view('guru/new');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'nama_guru' => 'required',
            'alamat' => 'required',
            'nomor_handphone' => 'required',
            'tanggal_lahir' => 'required', 
        ]);
        $teacher = new Guru();
        $teacher->nama_guru = $request->nama_guru;
        $teacher->alamat = $request->alamat;
        $teacher->nomor_handphone = $request->nomor_handphone;
        $teacher->tanggal_lahir = $request->tanggal_lahir;
        $teacher->save();

        $user_g = new User();
        $user_g->name = $request->nama_guru;
        $user_g->email = strtolower(substr($request->nama_guru,0,5)).'@admin.com';
        $user_g->password = bcrypt(strtolower($request->nama_guru).'123456');
        $user_g->role = '2';
        $user_g->save();
        return redirect('guru/');
    }

    public function show(Guru $guru)
    {
        $teacher = Guru::find($guru);
        return view('guru/all', compact('teacher'));
    }

    public function edit(Guru $guru)
    {
        $teacher = Guru::find($guru);
        return view('guru/edit', compact('teacher'));
    }

    public function update(Request $request, $guru)
    {
        $teacher = Guru::find($guru);
        $teacher->nama_guru = $request->nama_guru;
        $teacher->alamat = $request->alamat;
        $teacher->nomor_handphone = $request->nomor_handphone;
        $teacher->tanggal_lahir = $request->tanggal_lahir;
        $teacher->save();
        return redirect('guru/');
    }

    public function destroy(Guru $guru)
    {
        //
    }
}

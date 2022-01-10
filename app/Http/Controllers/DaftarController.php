<?php

namespace App\Http\Controllers;

use App\Models\pendaftar;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        return view('daftar');
    }

    public function daftar(Request $request)
    {
        pendaftar::create([
            'nik' => $request->nik,
            'nama'=> $request->nama,
            'jeniskelamin'=> $request->jeniskelamin,
            'tempatlahir'=> $request->tempatlahir,
            'tanggallahir'=> $request->tanggallahir,
            'alamat'=> $request->alamat,
            'lokasi'=> $request->lokasi,
            'vaksin'=> $request->vaksin,
        ]);

        return redirect('/daftar');
    }

    public function hasil()
    {
        return view('hasil',[
            'pendaftar' => pendaftar::get()
        ]);
    }

}


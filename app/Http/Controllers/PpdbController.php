<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    public function create()
    {
        return view('ppdb.daftar');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'asal_sekolah' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);

        Ppdb::create([
            'nama' => $request->nama,
            'asal_sekolah' => $request->asal_sekolah,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'status' => 'pending'
        ]);

        return back()->with('success', 'Pendaftaran berhasil dikirim');
    }
}

<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('guru.nilai.index', compact('siswa'));
    }

    public function store(Request $request)
    {
        Nilai::create([
            'siswa_id' => $request->siswa_id,
            'mapel' => $request->mapel,
            'nilai' => $request->nilai,
            'guru_id' => session('user')->guru->id
        ]);

        return back()->with('success', 'Nilai berhasil disimpan');
    }
}

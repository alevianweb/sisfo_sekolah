<?php

namespace App\Http\Controllers\Guru;

use App\Models\Guru;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        $guru = Guru::where('user_id',Auth::user()->id)->first();
        $nilais = Nilai::where('guru_id',$guru->id)->get();
        return view('guru.nilai.index', compact('siswa','guru','nilais'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'mapel' => 'required',
            'nilai' => 'required|integer|min:0|max:100'
        ]);
        $guru = Guru::where('user_id',Auth::user()->id)->first();

        Nilai::create([
            'siswa_id' => $request->siswa_id,
            'guru_id'  => $guru->id,
            'mapel'    => $request->mapel,
            'nilai'    => $request->nilai
        ]);

        return back()->with('success', 'Nilai berhasil disimpan');
    }

    public function edit($id)
{
    $nilai = Nilai::with('siswa')->findOrFail($id);
    return view('guru.nilai.edit', compact('nilai'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nilai' => 'required|integer|min:0|max:100'
    ]);

    Nilai::where('id', $id)->update([
        'nilai' => $request->nilai
    ]);

    return redirect('/guru/nilai')->with('success', 'Nilai berhasil diperbarui');
}

}

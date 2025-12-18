<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::with('user')->get();
        return view('admin.guru.index', compact('guru'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
            'nip' => 'required',
            'nama' => 'required',
            'mapel' => 'required',
        ]);

        $user = User::create([
            'username' => $request->username,
            'password' => $request->password,
            'role' => 'guru'
        ]);

        Guru::create([
            'user_id' => $user->id,
            'nip' => $request->nip,
            'nama' => $request->nama,
            'mapel' => $request->mapel
        ]);

        return redirect('/admin/guru')->with('success', 'Guru berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->user()->delete();
        return back()->with('success', 'Guru dihapus');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ppdb;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PpdbController extends Controller
{
    public function index()
    {
        $ppdb = Ppdb::orderBy('created_at', 'desc')->get();
        return view('admin.ppdb.index', compact('ppdb'));
    }
public function updateStatus($id, $status)
{
    // update status ppdb
    $ppdb = Ppdb::findOrFail($id);
    $ppdb->update(['status' => $status]);

    // jika diterima → insert otomatis
    if ($status === 'diterima') {

        // Cegah user dobel (pakai no_hp / username)
        $existingUser = User::where('username', $ppdb->no_hp)->first();

        if (!$existingUser) {

            // 1️⃣ insert ke users
            $user = User::create([
                'username' => $ppdb->nama,
                'email' => Str::random(6).'@siswa.local',
                'role' => 'siswa',
                'password' => Hash::make('123456'),
            ]);

            // 2️⃣ insert ke siswas
            Siswa::create([
                'user_id' => $user->id,
                'nis' => rand(100000, 999999),
                'nama' => $ppdb->nama,
                'kelas' => '6',
            ]);
        }
    }

    return back()->with('success', 'Status diperbarui & data siswa dibuat');
}

}

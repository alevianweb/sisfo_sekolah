<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Carbon\Carbon;

class AbsensiController extends Controller
{
    public function index()
    {
        return view('siswa.absen');
    }

    public function store()
    {
        Absensi::create([
            'user_id' => session('user')->id,
            'tanggal' => Carbon::today(),
            'status' => 'hadir'
        ]);

        return back()->with('success', 'Absensi berhasil');
    }
}

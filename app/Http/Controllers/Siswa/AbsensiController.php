<?php

namespace App\Http\Controllers\Siswa;

use Carbon\Carbon;
use App\Models\Absensi;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AbsensiController extends Controller
{
    public function index()
    {
        return view('siswa.absen');
    }

    public function store()
    {
        $userId = Auth::user()->id;
        $today = Carbon::today();

        // Cegah absen 2x dalam 1 hari
        $sudahAbsen = Absensi::where('user_id', $userId)
            ->where('tanggal', $today)
            ->exists();

        if ($sudahAbsen) {
            return back()->with('error', 'Anda sudah absen hari ini');
        }

        Absensi::create([
            'user_id' => $userId,
            'tanggal' => $today,
            'status' => 'hadir'
        ]);

        return back()->with('success', 'Absensi berhasil');
    }

    public function riwayat()
    {
        $absensis = Absensi::where('user_id', Auth::user()->id)
            ->orderBy('tanggal', 'desc')
            ->get();

        return view('siswa.riwayat-absen', compact('absensis'));
    }
}

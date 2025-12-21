<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Absensi;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensi = Absensi::with('user')->orderBy('tanggal', 'desc')->get();
        return view('admin.absensi.index', compact('absensi'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Nilai;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['siswa','guru'])->get();
        return view('admin.nilai.index', compact('nilai'));
    }
}

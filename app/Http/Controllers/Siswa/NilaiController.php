<?php

namespace App\Http\Controllers\Siswa;

use App\Models\Nilai;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    public function index()
    {
        $nilais = Nilai::whereHas('siswa', function ($q) {
            $q->where('user_id', Auth::user()->id);
        })->get();

        return view('siswa.nilai', compact('nilais'));
    }
}

<?php

namespace App\Http\Controllers\Guru;

use App\Models\Guru;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    public function index(){
        $guruid = Guru::where('user_id',Auth::user()->id)->first();
        $jadwal = Jadwal::where('guru_id',$guruid->id)->get();
        return view('guru.jadwal.index',compact('jadwal'));
    }
}

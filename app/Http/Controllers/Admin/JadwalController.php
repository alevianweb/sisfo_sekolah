<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\Guru;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = Jadwal::with('guru')->get();
        return view('admin.jadwal.index', compact('jadwal'));
    }

    public function create()
    {
        $guru = Guru::all();
        return view('admin.jadwal.create', compact('guru'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kelas' => 'required',
            'hari' => 'required',
            'jam' => 'required',
            'mapel' => 'required',
            'guru_id' => 'required'
        ]);

        Jadwal::create($request->all());

        return redirect('/admin/jadwal')->with('success', 'Jadwal berhasil ditambahkan');
    }

    public function destroy($id)
    {
        Jadwal::destroy($id);
        return back()->with('success', 'Jadwal dihapus');
    }
}

<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inventaris;
use Illuminate\Http\Request;

class InventarisController extends Controller
{
    public function index()
    {
        $inventaris = Inventaris::all();
        return view('admin.inventaris.index', compact('inventaris'));
    }

    public function create()
    {
        return view('admin.inventaris.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jumlah' => 'required|numeric',
            'kondisi' => 'required'
        ]);

        Inventaris::create($request->all());

        return redirect('/admin/inventaris')->with('success', 'Inventaris ditambahkan');
    }

    public function destroy($id)
    {
        Inventaris::destroy($id);
        return back()->with('success', 'Inventaris dihapus');
    }
}

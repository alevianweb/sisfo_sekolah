@extends('layouts.app')

@section('content')
<h4>Tambah Inventaris</h4>

<form method="POST" action="/admin/inventaris">
    @csrf

    <input type="text" name="nama_barang" class="form-control mb-2" placeholder="Nama Barang">
    <input type="number" name="jumlah" class="form-control mb-2" placeholder="Jumlah">
    <input type="text" name="kondisi" class="form-control mb-3" placeholder="Kondisi">

    <button class="btn btn-success">Simpan</button>
</form>
@endsection

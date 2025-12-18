@extends('layouts.app')

@section('content')
<h4>Tambah Siswa</h4>

<form method="POST" action="/admin/siswa">
    @csrf

    <input type="text" name="nis" class="form-control mb-2" placeholder="NIS">
    <input type="text" name="nama" class="form-control mb-2" placeholder="Nama">
    <input type="text" name="kelas" class="form-control mb-2" placeholder="Kelas">

    <hr>

    <input type="text" name="username" class="form-control mb-2" placeholder="Username Login">
    <input type="password" name="password" class="form-control mb-3" placeholder="Password">

    <button class="btn btn-success">Simpan</button>
</form>
@endsection

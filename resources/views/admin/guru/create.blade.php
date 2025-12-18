@extends('layouts.app')

@section('content')
<h4>Tambah Guru</h4>

<form method="POST" action="/admin/guru">
    @csrf

    <input type="text" name="nip" class="form-control mb-2" placeholder="NIP">
    <input type="text" name="nama" class="form-control mb-2" placeholder="Nama">
    <input type="text" name="mapel" class="form-control mb-3" placeholder="Mata Pelajaran">

    <hr>

    <input type="text" name="username" class="form-control mb-2" placeholder="Username Login">
    <input type="password" name="password" class="form-control mb-3" placeholder="Password">

    <button class="btn btn-success">Simpan</button>
</form>
@endsection

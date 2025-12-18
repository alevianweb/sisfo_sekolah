@extends('layouts.app')

@section('content')
<h4>Tambah Jadwal</h4>

<form method="POST" action="/admin/jadwal">
    @csrf

    <input type="text" name="kelas" class="form-control mb-2" placeholder="Kelas">

    <select name="hari" class="form-control mb-2">
        <option value="">-- Pilih Hari --</option>
        <option>Senin</option>
        <option>Selasa</option>
        <option>Rabu</option>
        <option>Kamis</option>
        <option>Jumat</option>
    </select>

    <input type="text" name="jam" class="form-control mb-2" placeholder="Jam (07.00 - 08.30)">
    <input type="text" name="mapel" class="form-control mb-2" placeholder="Mata Pelajaran">

    <select name="guru_id" class="form-control mb-3">
        <option value="">-- Pilih Guru --</option>
        @foreach($guru as $g)
            <option value="{{ $g->id }}">{{ $g->nama }}</option>
        @endforeach
    </select>

    <button class="btn btn-success">Simpan</button>
</form>
@endsection

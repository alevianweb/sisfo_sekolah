@extends('layouts.app')

@section('content')
<h4>Jadwal Pelajaran</h4>

<a href="/admin/jadwal/create" class="btn btn-primary mb-3">Tambah Jadwal</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Kelas</th>
        <th>Hari</th>
        <th>Jam</th>
        <th>Mapel</th>
        <th>Guru</th>
        <th>Aksi</th>
    </tr>

    @foreach($jadwal as $j)
    <tr>
        <td>{{ $j->kelas }}</td>
        <td>{{ $j->hari }}</td>
        <td>{{ $j->jam }}</td>
        <td>{{ $j->mapel }}</td>
        <td>{{ $j->guru->nama }}</td>
        <td>
            <form method="POST" action="/admin/jadwal/{{ $j->id }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection

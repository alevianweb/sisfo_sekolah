@extends('layouts.app')

@section('content')
<h4>Data Siswa</h4>

<a href="/admin/siswa/create" class="btn btn-primary mb-3">Tambah Siswa</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Username</th>
        <th>Aksi</th>
    </tr>

    @foreach($siswa as $s)
    <tr>
        <td>{{ $s->nis }}</td>
        <td>{{ $s->nama }}</td>
        <td>{{ $s->kelas }}</td>
        <td>{{ $s->user->username }}</td>
        <td>
            <form method="POST" action="/admin/siswa/{{ $s->id }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection

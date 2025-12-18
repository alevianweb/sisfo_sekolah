@extends('layouts.app')

@section('content')
<h4>Data Guru</h4>

<a href="/admin/guru/create" class="btn btn-primary mb-3">Tambah Guru</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>NIP</th>
        <th>Nama</th>
        <th>Mapel</th>
        <th>Username</th>
        <th>Aksi</th>
    </tr>

    @foreach($guru as $g)
    <tr>
        <td>{{ $g->nip }}</td>
        <td>{{ $g->nama }}</td>
        <td>{{ $g->mapel }}</td>
        <td>{{ $g->user->username }}</td>
        <td>
            <form method="POST" action="/admin/guru/{{ $g->id }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection

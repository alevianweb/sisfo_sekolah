@extends('layouts.app')

@section('content')
<h4>Inventaris Sekolah</h4>

<a href="/admin/inventaris/create" class="btn btn-primary mb-3">Tambah Inventaris</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Nama Barang</th>
        <th>Jumlah</th>
        <th>Kondisi</th>
        <th>Aksi</th>
    </tr>

    @foreach($inventaris as $i)
    <tr>
        <td>{{ $i->nama_barang }}</td>
        <td>{{ $i->jumlah }}</td>
        <td>{{ $i->kondisi }}</td>
        <td>
            <form method="POST" action="/admin/inventaris/{{ $i->id }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection

@extends('layouts.app')

@section('content')
<h3>Dashboard Admin</h3>

<div class="row mt-4">

    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h6>Manajemen Siswa</h6>
                <a href="/admin/siswa" class="btn btn-primary btn-sm mt-2">Kelola</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h6>Manajemen Guru</h6>
                <a href="/admin/guru" class="btn btn-primary btn-sm mt-2">Kelola</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h6>Jadwal</h6>
                <a href="/admin/jadwal" class="btn btn-primary btn-sm mt-2">Kelola</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card text-center">
            <div class="card-body">
                <h6>Inventaris</h6>
                <a href="/admin/inventaris" class="btn btn-primary btn-sm mt-2">Kelola</a>
            </div>
        </div>
    </div>

</div>
@endsection

@extends('layouts.app')

@section('content')
<h3>Dashboard Siswa</h3>

<div class="row mt-4">

    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h6>Absensi Online</h6>
                <a href="/siswa/absen" class="btn btn-warning btn-sm mt-2">Absen</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h6>Riwayat Absensi</h6>
                <a href="/siswa/riwayat-absen" class="btn btn-warning btn-sm mt-2">Lihat</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h6>Nilai</h6>
                <a href="/siswa/nilai" class="btn btn-warning btn-sm mt-2">Lihat</a>
            </div>
        </div>
    </div>

</div>
@endsection

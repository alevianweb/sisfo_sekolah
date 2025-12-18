@extends('layouts.app')

@section('content')
<h3>Dashboard Guru</h3>

<div class="row mt-4">

    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h6>Jadwal Mengajar</h6>
                <a href="/guru/jadwal" class="btn btn-success btn-sm mt-2">Lihat</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center">
            <div class="card-body">
                <h6>Input Nilai</h6>
                <a href="/guru/nilai" class="btn btn-success btn-sm mt-2">Input</a>
            </div>
        </div>
    </div>

</div>
@endsection

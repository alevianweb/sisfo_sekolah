@extends('layouts.app')

@section('title', 'Dashboard Siswa')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Dashboard Siswa</h1>

    <div class="bg-white rounded-lg shadow p-6 mb-6">
       <h2 class="text-xl font-semibold mb-4">
    Selamat Datang, {{ Auth::user()->siswa->nama }}
</h2>

<p class="text-gray-600">NIS: {{ Auth::user()->siswa->nis }}</p>
<p class="text-gray-600">Kelas: {{ Auth::user()->siswa->kelas }}</p>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a href="/siswa/absen" class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow-lg p-6 text-white transition">
            <h3 class="text-xl font-bold mb-2">Absensi</h3>
            <p class="opacity-90">Lakukan absensi harian</p>
        </a>

        <a href="/siswa/nilai" class="bg-green-500 hover:bg-green-600 rounded-lg shadow-lg p-6 text-white transition">
            <h3 class="text-xl font-bold mb-2">Lihat Nilai</h3>
            <p class="opacity-90">Cek nilai mata pelajaran</p>
        </a>

        <a href="/siswa/riwayat-absen" class="bg-purple-500 hover:bg-purple-600 rounded-lg shadow-lg p-6 text-white transition">
            <h3 class="text-xl font-bold mb-2">Riwayat Absensi</h3>
            <p class="opacity-90">Lihat riwayat kehadiran</p>
        </a>
    </div>
</div>
@endsection

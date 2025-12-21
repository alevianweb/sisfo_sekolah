@extends('layouts.app')

@section('title', 'Dashboard Guru')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Dashboard Guru</h1>

    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4">Selamat Datang, {{ Auth::user()->guru->nama ?? '-' }}</h2>
        <p class="text-gray-600">NIP: {{ Auth::user()->guru->nip ?? '-'}}</p>
        <p class="text-gray-600">Mata Pelajaran: {{ Auth::user()->guru->mapel ?? '-' }}</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <a href="/guru/nilai" class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow-lg p-6 text-white transition">
            <h3 class="text-xl font-bold mb-2">Kelola Nilai</h3>
            <p class="opacity-90">Input dan kelola nilai siswa</p>
        </a>
    </div>
</div>
@endsection

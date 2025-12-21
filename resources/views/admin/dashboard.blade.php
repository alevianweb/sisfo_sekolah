@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Dashboard Admin</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-blue-500 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm opacity-80">Total Siswa</p>
                    <h3 class="text-3xl font-bold mt-2">{{ \App\Models\Siswa::count() }}</h3>
                </div>
                <svg class="w-12 h-12 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
        </div>

        <div class="bg-green-500 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm opacity-80">Total Guru</p>
                    <h3 class="text-3xl font-bold mt-2">{{ \App\Models\Guru::count() }}</h3>
                </div>
                <svg class="w-12 h-12 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
        </div>

        <div class="bg-purple-500 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm opacity-80">Jadwal Pelajaran</p>
                    <h3 class="text-3xl font-bold mt-2">{{ \App\Models\Jadwal::count() }}</h3>
                </div>
                <svg class="w-12 h-12 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
        </div>

        <div class="bg-orange-500 rounded-lg shadow-lg p-6 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm opacity-80">Pendaftar PPDB</p>
                    <h3 class="text-3xl font-bold mt-2">{{ \App\Models\Ppdb::where('status', 'pending')->count() }}</h3>
                </div>
                <svg class="w-12 h-12 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Menu Cepat</h2>
            <div class="space-y-3">
                <a href="{{ route('siswa.index') }}" class="block p-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition">
                    Kelola Data Siswa
                </a>
                <a href="{{ route('guru.index') }}" class="block p-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition">
                    Kelola Data Guru
                </a>
                <a href="{{ route('jadwal.index') }}" class="block p-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition">
                    Kelola Jadwal Pelajaran
                </a>
                <a href="{{ route('inventaris.index') }}" class="block p-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition">
                    Kelola Inventaris
                </a>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">Aktivitas Terbaru</h2>
            <div class="space-y-3">
                <div class="flex items-center gap-3 p-3 bg-blue-50 rounded-lg">
                    <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                    <p class="text-sm text-gray-700">Sistem berjalan dengan baik</p>
                </div>
                <div class="flex items-center gap-3 p-3 bg-green-50 rounded-lg">
                    <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                    <p class="text-sm text-gray-700">Data tersinkronisasi</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

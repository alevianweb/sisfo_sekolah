@extends('layouts.app')

@section('title', 'Edit Nilai')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6">Edit Nilai Siswa</h1>

    <div class="bg-white p-6 rounded-lg shadow max-w-xl">
        <form action="{{ url('/guru/nilai/'.$nilai->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Nama Siswa</label>
                <input type="text"
                       value="{{ $nilai->siswa->nama }} - {{ $nilai->siswa->kelas }}"
                       class="w-full border px-3 py-2 rounded-lg bg-gray-100"
                       readonly>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Mata Pelajaran</label>
                <input type="text"
                       value="{{ $nilai->mapel }}"
                       class="w-full border px-3 py-2 rounded-lg bg-gray-100"
                       readonly>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium mb-1">Nilai</label>
                <input type="number" name="nilai"
                       value="{{ $nilai->nilai }}"
                       min="0" max="100"
                       class="w-full border px-3 py-2 rounded-lg"
                       required>
            </div>

            <div class="flex gap-2">
                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                    Update
                </button>
                <a href="/guru/nilai"
                   class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded-lg">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

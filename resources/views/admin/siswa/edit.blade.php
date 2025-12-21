@extends('layouts.app')

@section('title', 'Edit Data Siswa')

@section('content')
<div class="container mx-auto px-4 py-6 max-w-xl">
    <div class="bg-white rounded-lg shadow p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">
            Edit Data Siswa
        </h1>

        {{-- Error Validation --}}
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- NIS --}}
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">
                    NIS
                </label>
                <input type="text" name="nis"
                       value="{{ old('nis', $siswa->nis) }}"
                       class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-blue-200"
                       required>
            </div>

            {{-- Nama --}}
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2">
                    Nama
                </label>
                <input type="text" name="nama"
                       value="{{ old('nama', $siswa->nama) }}"
                       class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-blue-200"
                       required>
            </div>

            {{-- Kelas --}}
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2">
                    Kelas
                </label>
                <input type="text" name="kelas"
                       value="{{ old('kelas', $siswa->kelas) }}"
                       class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-blue-200"
                       required>
            </div>

            {{-- Tombol --}}
            <div class="flex justify-between">
                <a href="{{ route('siswa.index') }}"
                   class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-lg">
                    Kembali
                </a>

                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

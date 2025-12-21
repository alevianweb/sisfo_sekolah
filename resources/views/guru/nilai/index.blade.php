@extends('layouts.app')

@section('title', 'Kelola Nilai')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Kelola Nilai Siswa</h1>

    <!-- @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif -->

    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <h2 class="text-lg font-semibold mb-4">Tambah Nilai Baru</h2>
        <form action="/guru/nilai" method="POST" class="grid grid-cols-1 md:grid-cols-4 gap-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Siswa</label>
                <select name="siswa_id" class="w-full px-3 py-2 border rounded-lg" required>
                    <option value="">Pilih Siswa</option>
                    @foreach($siswa as $siswas)
                        <option value="{{ $siswas->id }}">{{ $siswas->nama }} - {{ $siswas->kelas }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Mata Pelajaran</label>
                <input type="text" name="mapel" value="{{ $guru->mapel ?? '-' }}" 
                       class="w-full px-3 py-2 border rounded-lg" readonly>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nilai</label>
                <input type="number" name="nilai" min="0" max="100" 
                       class="w-full px-3 py-2 border rounded-lg" required>
            </div>
            <div class="flex items-end">
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                    Simpan
                </button>
            </div>
        </form>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <h2 class="text-lg font-semibold p-6 border-b">Daftar Nilai yang Sudah Diinput</h2>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama Siswa</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kelas</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Mata Pelajaran</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nilai</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($nilais as $index => $nilai)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $nilai->siswa->nama }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $nilai->siswa->kelas }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $nilai->mapel }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="font-semibold
                                @if($nilai->nilai >= 80) text-green-600
                                @elseif($nilai->nilai >= 60) text-yellow-600
                                @else text-red-600
                                @endif">
                                {{ $nilai->nilai }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ url('/guru/nilai/'.$nilai->id.'/edit') }}"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm">
                                Edit
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                            Belum ada nilai yang diinput
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Data PPDB')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Data Pendaftaran PPDB</h1>

    <!-- @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif -->

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Asal Sekolah</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No HP</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($ppdb as $index => $ppdb)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $ppdb->nama }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $ppdb->asal_sekolah }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $ppdb->no_hp }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 rounded-full text-xs
                                @if($ppdb->status == 'diterima') bg-green-100 text-green-800
                                @elseif($ppdb->status == 'ditolak') bg-red-100 text-red-800
                                @else bg-yellow-100 text-yellow-800
                                @endif">
                                {{ ucfirst($ppdb->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($ppdb->status == 'pending')
                                <a href="/admin/ppdb/{{ $ppdb->id }}/diterima" 
                                   class="text-green-600 hover:text-green-900 mr-3">
                                    Terima
                                </a>
                                <a href="/admin/ppdb/{{ $ppdb->id }}/ditolak" 
                                   class="text-red-600 hover:text-red-900">
                                    Tolak
                                </a>
                            @else
                                <span class="text-gray-400">Sudah diproses</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                            Belum ada pendaftar
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

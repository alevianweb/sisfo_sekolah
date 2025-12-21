@extends('layouts.app')

@section('title', 'Nilai Saya')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Nilai Mata Pelajaran</h1>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">No</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Mata Pelajaran</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nilai</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Guru Pengajar</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($nilais as $index => $nilai)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $nilai->mapel }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="font-semibold text-lg
                                @if($nilai->nilai >= 80) text-green-600
                                @elseif($nilai->nilai >= 60) text-yellow-600
                                @else text-red-600
                                @endif">
                                {{ $nilai->nilai }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $nilai->guru->nama }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">
                            Belum ada nilai
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

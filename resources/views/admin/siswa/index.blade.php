@extends('layouts.app')

@section('title', 'Data Siswa')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Data Siswa</h1>
        <a href="{{ route('siswa.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
            Tambah Siswa
        </a>
    </div>

    {{-- Alert Success --}}
    <!-- @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif -->

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">No</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">NIS</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Nama</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Kelas</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Username</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($siswa as $index => $item)
                    <tr>
                        <td class="px-6 py-4 text-center align-middle">
                            {{ $index + 1 }}
                        </td>
                        <td class="px-6 py-4 text-center align-middle">
                            {{ $item->nis }}
                        </td>
                        <td class="px-6 py-4 text-center align-middle">
                            {{ $item->nama }}
                        </td>
                        <td class="px-6 py-4 text-center align-middle">
                            {{ $item->kelas }}
                        </td>
                        <td class="px-6 py-4 text-center align-middle">
                            {{ $item->user->username ?? '-' }}
                        </td>

                        {{-- AKSI --}}
                        <td class="px-6 py-4 text-center align-middle">
                            <div class="flex justify-center gap-4">
                                {{-- Edit --}}
                                <a href="{{ route('siswa.edit', $item->id) }}"
                                   class="text-yellow-600 hover:text-yellow-800 font-medium">
                                    Edit
                                </a>

                                {{-- Hapus --}}
                                <form action="{{ route('siswa.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="text-red-600 hover:text-red-800 font-medium"
                                            onclick="return confirm('Yakin ingin menghapus data siswa?')">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6"
                            class="px-6 py-4 text-center text-gray-500">
                            Belum ada data siswa
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Absensi')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Absensi Harian</h1>

    <!-- @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif -->

    @if(session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    <div class="bg-white rounded-lg shadow p-6 max-w-md mx-auto">
        <div class="text-center mb-6">
            <p class="text-gray-600">Tanggal: {{ date('d F Y') }}</p>
            <p class="text-gray-600">Waktu: <span id="clock"></span></p>
        </div>

        <form action="/siswa/absen" method="POST">
            @csrf
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg">
                Lakukan Absensi
            </button>
        </form>

        <p class="text-sm text-gray-500 text-center mt-4">
            * Anda hanya dapat melakukan absensi sekali per hari
        </p>
    </div>
</div>

<script>
function updateClock() {
    const now = new Date();
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    const seconds = String(now.getSeconds()).padStart(2, '0');
    document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;
}
setInterval(updateClock, 1000);
updateClock();
</script>
@endsection

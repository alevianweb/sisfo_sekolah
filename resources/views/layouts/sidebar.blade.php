<aside class="w-64 bg-blue-900 text-white flex flex-col">
    <div class="px-6 py-4 text-xl font-bold border-b border-blue-700">
        SMP Negeri 2 Brebes
    </div>

 <nav class="flex-1 px-4 py-4 space-y-2 text-sm">

    {{-- ADMIN --}}
    @if(Auth::check() && Auth::user()->role === 'admin')
        <a href="/admin" class="block px-4 py-2 rounded hover:bg-blue-700">Dashboard</a>
        <a href="/admin/siswa" class="block px-4 py-2 rounded hover:bg-blue-700">Data Siswa</a>
        <a href="/admin/guru" class="block px-4 py-2 rounded hover:bg-blue-700">Data Guru</a>
        <a href="/admin/jadwal" class="block px-4 py-2 rounded hover:bg-blue-700">Jadwal</a>
        <a href="/admin/inventaris" class="block px-4 py-2 rounded hover:bg-blue-700">Inventaris</a>
        <a href="/admin/absen" class="block px-4 py-2 rounded hover:bg-blue-700">Absensi</a>
        <a href="/admin/nilai" class="block px-4 py-2 rounded hover:bg-blue-700">Nilai</a>
        <a href="/admin/ppdb" class="block px-4 py-2 rounded hover:bg-blue-700">PPDB</a>
    @endif

    {{-- GURU --}}
    @if(Auth::check() && Auth::user()->role === 'guru')
        <a href="/guru" class="block px-4 py-2 rounded hover:bg-blue-700">Dashboard</a>
        <a href="/guru/nilai" class="block px-4 py-2 rounded hover:bg-blue-700">Input Nilai</a>
        <a href="/guru/jadwal" class="block px-4 py-2 rounded hover:bg-blue-700">Jadwal</a>
    @endif

    {{-- SISWA --}}
    @if(Auth::check() && Auth::user()->role === 'siswa')
        <a href="/siswa" class="block px-4 py-2 rounded hover:bg-blue-700">Dashboard</a>
        <a href="/siswa/absen" class="block px-4 py-2 rounded hover:bg-blue-700">Absensi</a>
        <a href="/siswa/riwayat-absen" class="block px-4 py-2 rounded hover:bg-blue-700">Riwayat Absen</a>
        <a href="/siswa/nilai" class="block px-4 py-2 rounded hover:bg-blue-700">Nilai</a>
    @endif
        <a href="/logout" class="block px-4 py-2 rounded hover:bg-blue-700">Logout</a>

</nav>

    <div class="px-4 py-4 border-t border-blue-700 text-xs text-center">
        © {{ date('Y') }} SMP Negeri 2 Brebes
    </div>
</aside>

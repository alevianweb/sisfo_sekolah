<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('logo.webp') }}">
    <title>@yield('title', config('app.name'))</title>


    {{-- Tailwind CDN (sementara, aman untuk tugas & demo) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">
    {{-- Sidebar --}}
    @if (Auth::check())
    
    @include('layouts.sidebar')
    
    @endif

    {{-- Main Content --}}
    <div class="flex-1 flex flex-col">
        {{-- Navbar --}}
        @if (!Auth::check())
        
    <nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center gap-3">
                <div>
                    <img src="{{ asset('logo.webp') }}" alt="Logo SMP Negeri 2 Brebes" class="w-10 h-10 object-contain"
                    >
                </div>
                <span class="font-bold text-xl text-gray-900">SMP Negeri 2 Brebes</span>
            </div>

            
            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center gap-8">
                <a href="/" class="nav-link font-medium">Beranda</a>
                <a href="#profil" class="nav-link font-medium">Profil</a>
                <a href="#visi-misi" class="nav-link font-medium">Visi & Misi</a>
                <a href="#galeri" class="nav-link font-medium">Galeri</a>
                <a href="/ppdb" class="nav-link font-medium">PPDB</a>
                <a href="/login" class="btn-primary">
                    <i class="fas fa-sign-in-alt mr-2"></i>Login
                </a>
            </div>
            
            <!-- Mobile menu button -->
            <button onclick="toggleMobileMenu()" class="md:hidden p-2">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <a href="/" class="block py-2 nav-link">Beranda</a>
            <a href="#profil" class="block py-2 nav-link">Profil</a>
            <a href="#visi-misi" class="block py-2 nav-link">Visi & Misi</a>
            <a href="#galeri" class="nav-link font-medium">Galeri</a>
            <a href="/ppdb" class="block py-2 nav-link">PPDB</a>
            <a href="/login" class="block py-2 text-blue-600 font-medium">Login</a>
        </div>
    </div>
</nav>
        @endif

        {{-- Page Content --}}
        <main class="p-6">
            @if(session('success'))
            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
            @endif

            @yield('content')
        </main>
    </div>
</div>

</body>
</html>

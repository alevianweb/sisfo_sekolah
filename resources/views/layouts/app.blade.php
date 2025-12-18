<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark px-3">
    <span class="navbar-brand">SI Sekolah</span>

    @if(session('user'))
        <span class="text-white me-3">
            {{ session('user')->username }} ({{ session('user')->role }})
        </span>
        <a href="/logout" class="btn btn-sm btn-danger">Logout</a>
    @endif
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>

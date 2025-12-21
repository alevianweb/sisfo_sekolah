<!DOCTYPE html>
<html>
<head>
    <title>PPDB Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h4 class="mb-3">Formulir PPDB Online</h4>

        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="/ppdb">
            @csrf
            <input type="text" name="nama" class="form-control mb-2" placeholder="Nama Lengkap">
            <input type="text" name="asal_sekolah" class="form-control mb-2" placeholder="Asal Sekolah">
            <textarea name="alamat" class="form-control mb-2" placeholder="Alamat"></textarea>
            <input type="text" name="no_hp" class="form-control mb-3" placeholder="No HP">

            <button class="btn btn-primary w-100">Daftar</button>
        </form>
    </div>
</div>

</body>
</html>

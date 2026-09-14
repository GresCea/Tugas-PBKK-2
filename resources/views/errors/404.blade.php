<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tidak Ditemukan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="site-shell">
    <main class="page-card">
        <span class="eyebrow">ERROR 404</span>
        <h1>Halaman tidak ditemukan.</h1>
        <p class="lead">Alamat yang Anda buka tidak tersedia atau sudah dipindahkan.</p>
        <a class="action-link" href="{{ route('home') }}">Kembali ke halaman utama <span>→</span></a>
    </main>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil {{ $mahasiswa['nama'] }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="site-shell">
    <main class="page-card">
        <a class="back-link" href="{{ route('home') }}">← Kembali ke home</a>
        <span class="eyebrow">DETAIL PROFIL</span>
        <h1>{{ $mahasiswa['nama'] }}</h1>
        <p class="lead">Informasi lengkap mahasiswa dengan NRP <strong>{{ $mahasiswa['nrp'] }}</strong>.</p>

        <dl class="detail-list">
            <div><dt>NRP</dt><dd>{{ $mahasiswa['nrp'] }}</dd></div>
            <div><dt>Program studi</dt><dd>{{ $mahasiswa['programStudi'] }}</dd></div>
            <div><dt>Fakultas</dt><dd>{{ $mahasiswa['fakultas'] }}</dd></div>
            <div><dt>Kampus</dt><dd>{{ $mahasiswa['kampus'] }}</dd></div>
            <div><dt>Email</dt><dd>{{ $mahasiswa['email'] }}</dd></div>
        </dl>
    </main>
</body>
</html>

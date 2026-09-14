<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Profil Mahasiswa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="site-shell">
    <main class="page-card home-card">
        <span class="eyebrow">PROFIL MAHASISWA</span>
        <h1>Selamat datang di web saya.</h1>
        <p class="lead">Halo, saya <strong>{{ $nama }}</strong>, mahasiswa {{ $programStudi }}. Halaman ini berisi profil singkat dan ide platform Agentic AI yang sedang kelompok saya kembangkan.</p>

        <div class="profile-highlight">
            <div>
                <span class="label">NRP</span>
                <strong>{{ $nrp }}</strong>
            </div>
            <div>
                <span class="label">Program studi</span>
                <strong>{{ $programStudi }}</strong>
            </div>
        </div>

        <nav class="link-grid" aria-label="Navigasi utama">
            <a class="action-link" href="{{ route('dashboard.mahasiswa.profile', ['nrp' => $nrp]) }}">Lihat detail profil <span>→</span></a>
            <a class="action-link" href="{{ route('dashboard.gpa.calculate', ['ip1' => 3.50, 'ip2' => 3.75]) }}">Hitung rata-rata IP <span>→</span></a>
            <a class="action-link" href="{{ route('agent.idea') }}">Jelajahi ide Agentic AI <span>→</span></a>
        </nav>
    </main>
</body>
</html>

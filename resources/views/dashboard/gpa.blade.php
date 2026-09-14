<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator IPK</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="site-shell">
    <main class="page-card">
        <a class="back-link" href="{{ route('home') }}">← Kembali ke home</a>
        <span class="eyebrow">DASHBOARD AKADEMIS</span>
        <h1>Kalkulator IPK</h1>
        <p class="lead">Rangkuman nilai indeks prestasi dari dua semester.</p>

        <dl class="detail-list">
            <div><dt>IP Semester 1</dt><dd>{{ number_format($ip1, 2) }}</dd></div>
            <div><dt>IP Semester 2</dt><dd>{{ number_format($ip2, 2) }}</dd></div>
            <div><dt>Total IP</dt><dd>{{ number_format($total, 2) }}</dd></div>
            <div><dt>Rata-rata IP</dt><dd><strong>{{ number_format($average, 2) }}</strong></dd></div>
        </dl>
    </main>
</body>
</html>

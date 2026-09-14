<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ide Agentic AI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="site-shell">
    <main class="page-card agent-card max-w-5xl">
        <a class="back-link" href="{{ route('home') }}">← Kembali ke home</a>
        <span class="eyebrow">IDE PLATFORM AGENTIC AI</span>
        <h1>{{ $tema }}</h1>
        <p class="lead">Platform Agentic AI mandiri berbasis Laravel dan NativePHP untuk memantau, menganalisis, dan mendeteksi anomali pada system log secara otomatis.</p>

        <section class="idea-box">
            <span class="eyebrow">SUB-TEMA</span>
            <h2>System Log Anomaly Detection Agent</h2>
            <p>Platform ini membantu administrator dan developer menemukan error, aktivitas tidak normal, serta potensi gangguan sistem tanpa harus membaca ribuan baris log secara manual.</p>
        </section>

        <section class="agent-section">
            <span class="eyebrow">GAMBARAN UMUM</span>
            <h2>Dari log mentah menjadi tindakan</h2>
            <div class="flow-list" aria-label="Alur kerja agent">
                <span>Collect Log</span><b>→</b><span>Analyze</span><b>→</b><span>Detect Anomaly</span><b>→</b><span>Investigate</span><b>→</b><span>Determine Severity</span><b>→</b><span>Recommend Action</span><b>→</b><span>Generate Report</span>
            </div>
            <p>Berbeda dari monitoring biasa yang hanya menampilkan log atau memberi peringatan berdasarkan aturan statis, agent memahami konteks, menghubungkan event yang berkaitan, menentukan tingkat keparahan, dan merekomendasikan tindakan.</p>
        </section>

        <section class="agent-section">
            <span class="eyebrow">CONTOH KASUS</span>
            <h2>Database connection failure</h2>
            <pre class="log-example"><code>10:01:12 ERROR Database connection failed
10:01:15 ERROR Database connection failed
10:01:17 ERROR Database connection failed
10:01:20 WARNING Connection pool exhausted
10:01:25 ERROR Application timeout</code></pre>
            <div class="severity-box">
                <strong>Anomaly Detected — High Severity</strong>
                <p>Agent menghubungkan kegagalan database, connection pool yang habis, dan application timeout sebagai satu rangkaian insiden.</p>
            </div>
            <p><strong>Kemungkinan penyebab:</strong> database tidak dapat diakses, connection pool kehabisan koneksi, dan kegagalan database menyebabkan request aplikasi mengalami timeout.</p>
            <p><strong>Rekomendasi:</strong> periksa status database service, koneksi jaringan, konfigurasi connection pool, dan jumlah koneksi aktif.</p>
        </section>

        <section class="agent-section">
            <span class="eyebrow">FITUR UTAMA</span>
            <div class="feature-grid">
                <article><strong>Log Collector</strong><span>Mengambil atau mengimpor log.</span></article>
                <article><strong>Log Parser</strong><span>Mengubah log mentah menjadi data terstruktur.</span></article>
                <article><strong>Anomaly Detection</strong><span>Menemukan pola log yang tidak normal.</span></article>
                <article><strong>AI Log Analyzer</strong><span>Menganalisis konteks dan hubungan antar-event.</span></article>
                <article><strong>Severity Classification</strong><span>Info, Warning, Medium, High, hingga Critical.</span></article>
                <article><strong>Root Cause Analysis</strong><span>Memperkirakan penyebab utama anomali.</span></article>
                <article><strong>Recommendation Agent</strong><span>Memberikan langkah troubleshooting.</span></article>
                <article><strong>Incident Timeline</strong><span>Menampilkan event sebelum dan sesudah anomali.</span></article>
                <article><strong>Dashboard Monitoring</strong><span>Menampilkan kondisi sistem dan statistik.</span></article>
                <article><strong>Report Generator</strong><span>Menghasilkan laporan analisis untuk tim.</span></article>
            </div>
        </section>

        <section class="agent-section">
            <span class="eyebrow">UNSUR AGENTIC AI</span>
            <h2>Agent yang mampu bertindak mandiri</h2>
            <ol class="cycle-list">
                <li><strong>Perception</strong><span>Mengambil log dan informasi sistem.</span></li>
                <li><strong>Reasoning</strong><span>Menganalisis pola dan hubungan antar-log.</span></li>
                <li><strong>Decision Making</strong><span>Menentukan anomali dan tingkat urgensinya.</span></li>
                <li><strong>Action</strong><span>Membuat incident, rekomendasi, atau notifikasi.</span></li>
                <li><strong>Evaluation</strong><span>Mengevaluasi kondisi setelah tindakan atau log baru.</span></li>
                <li><strong>Re-planning</strong><span>Menganalisis ulang saat informasi baru ditemukan.</span></li>
            </ol>
        </section>

        <section class="agent-section compact-grid">
            <div>
                <span class="eyebrow">TEKNOLOGI</span>
                <p><strong>Laravel</strong> untuk backend, database, authentication, API, dan business logic. <strong>NativePHP</strong> untuk aplikasi desktop standalone. LLM/Generative AI digunakan untuk reasoning, sementara MySQL/SQLite menyimpan log, anomaly, incident, dan hasil analisis.</p>
                <p>Scheduler dan Queue menjalankan monitoring otomatis, sedangkan dashboard dan chart menyajikan statistik. System log menjadi sumber data utama.</p>
            </div>
            <div class="idea-box outcome-box">
                <span class="eyebrow">TUJUAN PLATFORM</span>
                <h2>Raw Logs → Anomaly → Diagnosis → Recommendation → Action</h2>
                <p>Mengurangi waktu dan usaha developer atau administrator dalam menemukan masalah pada sistem.</p>
            </div>
        </section>
    </main>
</body>
</html>

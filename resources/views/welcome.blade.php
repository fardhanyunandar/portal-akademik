<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Akademik - PeTIK Jombang</title>
    <!-- Bootstrap 5 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-deep: #0B2545;
            --primary-classic: #134074;
            --primary-light: #8DA9C4;
            --bg-ice: #EEF4F8;
            --accent-gold: #FFD700;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: #F4F7F9;
            color: #333333;
            overflow-x: hidden;
        }

        /* Navbar Refinement */
        .navbar {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.04);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.25rem;
            color: var(--primary-deep) !important;
            letter-spacing: -0.5px;
        }

        /* Elegant Button Variants */
        .btn-custom-login {
            background: transparent;
            border: 2px solid var(--primary-classic);
            color: var(--primary-classic);
            padding: 8px 24px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-custom-login:hover {
            background: var(--primary-classic);
            color: white !important;
        }

        .btn-custom-register {
            background: linear-gradient(135deg, var(--primary-classic), var(--primary-deep));
            color: white;
            padding: 8px 24px;
            border-radius: 8px;
            font-weight: 600;
            border: none;
            box-shadow: 0 4px 15px rgba(19, 64, 116, 0.2);
            transition: all 0.3s ease;
        }

        .btn-custom-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(19, 64, 116, 0.3);
            color: white;
        }

        /* Hero Section Styling */
        .hero {
            min-height: 100vh;
            background: radial-gradient(circle at 80% 20%, rgba(20, 64, 116, 0.95) 0%, rgba(11, 37, 69, 1) 100%);
            display: flex;
            align-items: center;
            position: relative;
            padding-top: 110px;
            padding-bottom: 60px;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: white;
            line-height: 1.15;
            letter-spacing: -1px;
        }

        .hero-title span {
            color: var(--accent-gold);
            text-shadow: 0 2px 10px rgba(255, 215, 0, 0.2);
        }

        .hero-subtitle {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.8;
        }

        .hero-btn-primary {
            background: white;
            color: var(--primary-deep) !important;
            padding: 14px 32px;
            border-radius: 10px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        .hero-btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
        }

        .hero-btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white !important;
            padding: 14px 32px;
            border-radius: 10px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
        }

        .hero-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: white;
        }

        /* Dashboard Glass Dashboard Badge */
        .hero-image-box {
            background: rgba(255, 255, 255, 0.06);
            border-radius: 24px;
            padding: 50px 40px;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
        }

        .hero-image-box i.main-icon {
            font-size: 7rem;
            color: rgba(255, 255, 255, 0.85);
            filter: drop-shadow(0 10px 15px rgba(0,0,0,0.2));
        }

        /* Features Section Card */
        .section-title {
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--primary-deep);
            position: relative;
            padding-bottom: 15px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: var(--primary-classic);
            border-radius: 2px;
        }

        .feature-card {
            border: none;
            border-radius: 16px;
            padding: 40px 30px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            background: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
        }

        .feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(11, 37, 69, 0.08);
        }

        .feature-icon-wrapper {
            width: 65px;
            height: 65px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 1.75rem;
            background: var(--bg-ice);
            color: var(--primary-classic);
        }

        /* Program Studi Refinement */
        .jurusan-card {
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            background: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .jurusan-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(11, 37, 69, 0.12);
        }

        .jurusan-header {
            padding: 45px 30px;
            text-align: center;
            color: white;
        }

        .jurusan-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 5px 16px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            backdrop-filter: blur(5px);
        }

        /* Footer Accent */
        .footer {
            background: #061527;
            color: rgba(255, 255, 255, 0.6);
            border-top: 4px solid var(--primary-classic);
        }

        /* Responsiveness Fixes */
        @media (max-width: 991.98px) {
            .hero { padding-top: 130px; min-height: auto; }
            .hero-title { font-size: 2.75rem; text-align: center; }
            .hero-subtitle { text-align: center; }
            .hero-btn-group { justify-content: center; }
            .hero-stats { justify-content: center; }
        }

        @media (max-width: 575.98px) {
            .hero-title { font-size: 2.2rem; }
            .hero-btn-primary, .hero-btn-secondary { width: 100%; text-align: center; }
            .feature-card { padding: 30px 20px; }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <i class="bi bi-mortarboard-fill me-2 fs-3 text-primary"></i>
                <span>Portal Akademik PeTIK</span>
            </a>
            
            <!-- Mobile Toggle Button -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links & Buttons -->
            <div class="collapse navbar-collapse text-center mt-3 mt-lg-0" id="navbarNav">
                <div class="ms-auto d-flex flex-column flex-lg-row align-items-center gap-2 gap-lg-3 w-100 justify-content-end">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn-custom-register px-4 py-2">
                                <i class="bi bi-speedometer2 me-2"></i> Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn-custom-login w-100 w-lg-auto">
                                <i class="bi bi-box-arrow-in-right me-2"></i> Masuk
                            </a>
                            @if (Route::has('register'))
                                <a href="https://monev-santri.petikjombang.com/pmbt" class="btn-custom-register w-100 w-lg-auto">
                                    <i class="bi bi-person-plus me-2"></i> Daftar Maba
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="hero-title mb-3">
                        Portal Akademik<br>
                        <span>Mahasantri PeTIK</span><br>
                        Jombang
                    </h1>
                    <p class="hero-subtitle mb-4 mx-auto mx-lg-0" style="max-width: 600px;">
                        Sistem informasi akademik terpadu untuk mahasantri, dosen, dan admin PeTIK Jombang. Pantau
                        nilai, presensi, jadwal, dan materi kuliah dalam satu platform digital yang andal.
                    </p>
                    <div class="hero-btn-group d-flex flex-wrap gap-3 mb-5">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="hero-btn-primary">
                                <i class="bi bi-speedometer2 me-2"></i> Masuk Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="hero-btn-primary">
                                <i class="bi bi-box-arrow-in-right me-2"></i> Masuk Portal
                            </a>
                            <a href="https://monev-santri.petikjombang.com/pmbt" class="hero-btn-secondary">
                                <i class="bi bi-person-plus me-2"></i> Daftar Maba
                            </a>
                        @endauth
                    </div>
                    
                    <!-- Stats Badges -->
                    <div class="hero-stats d-flex gap-4 justify-content-center justify-content-lg-start border-top border-secondary border-opacity-25 pt-4">
                        <div>
                            <div class="fs-2 fw-bold text-white">2</div>
                            <small class="text-white-50 text-uppercase tracking-wider" style="font-size:0.75rem">Jurusan</small>
                        </div>
                        <div class="vr text-white-50"></div>
                        <div>
                            <div class="fs-2 fw-bold text-white">3</div>
                            <small class="text-white-50 text-uppercase tracking-wider" style="font-size:0.75rem">Role Akses</small>
                        </div>
                        <div class="vr text-white-50"></div>
                        <div>
                            <div class="fs-2 fw-bold text-warning">100%</div>
                            <small class="text-white-50 text-uppercase tracking-wider" style="font-size:0.75rem">Digital</small>
                        </div>
                    </div>
                </div>
                
                <!-- Modern Right Graphic -->
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="hero-image-box text-center">
                        <i class="bi bi-mortarboard-fill main-icon mb-4 d-block"></i>
                        <div class="row g-2 justify-content-center">
                            <div class="col-4">
                                <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.08);">
                                    <i class="bi bi-people-fill text-white fs-3 d-block mb-1"></i>
                                    <span class="text-white-50 d-block" style="font-size:0.8rem">Santri</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.08);">
                                    <i class="bi bi-person-badge-fill text-white fs-3 d-block mb-1"></i>
                                    <span class="text-white-50 d-block" style="font-size:0.8rem">Dosen</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="p-3 rounded-3" style="background: rgba(255,255,255,0.08);">
                                    <i class="bi bi-shield-lock-fill text-white fs-3 d-block mb-1"></i>
                                    <span class="text-white-50 d-block" style="font-size:0.8rem">Admin</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 my-5">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="section-title mb-3">Fitur Unggulan</h2>
                <p class="text-muted mx-auto" style="max-width: 500px;">Semua yang Anda butuhkan untuk memantau progress akademik dalam satu dasbor terintegrasi.</p>
            </div>
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card h-100 text-center">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-journal-richtext"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: var(--primary-deep)">Monitoring Nilai</h5>
                        <p class="text-muted small mb-0">Pantau nilai tugas, UTS, dan UAS secara real-time. Lihat transkrip dan perkembangan akumulasi IPK secara transparan.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card h-100 text-center">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-clipboard-check"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: var(--primary-deep)">Presensi Digital</h5>
                        <p class="text-muted small mb-0">Sistem presensi kehadiran kelas otomatis. Pantau persentase absensi minimum per mata kuliah dengan mudah.</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card h-100 text-center">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-calendar3"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: var(--primary-deep)">Jadwal Kuliah</h5>
                        <p class="text-muted small mb-0">Akses jadwal perkuliahan harian, waktu ruang kelas, serta nama dosen pengampu secara real-time.</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card h-100 text-center">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: var(--primary-deep)">Materi Kuliah</h5>
                        <p class="text-muted small mb-0">Unduh materi pembelajaran, slide presentasi, dan modul tugas yang diunggah oleh dosen kapan saja.</p>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card h-100 text-center">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-megaphone"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: var(--primary-deep)">Pusat Informasi</h5>
                        <p class="text-muted small mb-0">Dapatkan notifikasi berita penting dan maklumat resmi dari bagian administrasi akademik secara instan.</p>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="feature-card h-100 text-center">
                        <div class="feature-icon-wrapper">
                            <i class="bi bi-person-circle"></i>
                        </div>
                        <h5 class="fw-bold mb-2" style="color: var(--primary-deep)">Data Pribadi</h5>
                        <p class="text-muted small mb-0">Kelola informasi profil kemahasiswaan dan data berkas administrasi pribadi dengan aman.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Studi Section -->
    <section class="py-5 bg-light">
        <div class="container py-4">
            <div class="text-center mb-5">
                <h2 class="section-title mb-3">Program Studi</h2>
                <p class="text-muted">Dua konsentrasi keahlian masa depan unggulan di PeTIK Jombang</p>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- PPL -->
                <div class="col-md-6 col-lg-5">
                    <div class="jurusan-card h-100">
                        <div class="jurusan-header" style="background: linear-gradient(135deg, #134074, #0B2545);">
                            <span class="jurusan-badge mb-3">PPL</span>
                            <h4 class="fw-bold mb-2">Pengembangan Perangkat Lunak</h4>
                            <p class="small text-white-50 mb-0">Kurikulum fokus pada pembuatan aplikasi web, mobile, serta rekayasa sistem informasi berskala industri.</p>
                        </div>
                        <div class="p-4 card-body">
                            <ul class="list-unstyled mb-0 d-flex flex-column gap-3">
                                <li class="d-flex align-items-center"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i><span>Web Development (Fullstack)</span></li>
                                <li class="d-flex align-items-center"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i><span>Mobile App Development</span></li>
                                <li class="d-flex align-items-center"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i><span>Database Management System</span></li>
                                <li class="d-flex align-items-center"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i><span>Software Architecture</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- DM -->
                <div class="col-md-6 col-lg-5">
                    <div class="jurusan-card h-100">
                        <div class="jurusan-header" style="background: linear-gradient(135deg, #1d4ed8, #1e40af);">
                            <span class="jurusan-badge mb-3">DM</span>
                            <h4 class="fw-bold mb-2">Digital Marketing</h4>
                            <p class="small text-white-50 mb-0">Menguasai strategi pemasaran digital cerdas, manajemen media sosial, dan metrik bisnis era modern.</p>
                        </div>
                        <div class="p-4 card-body">
                            <ul class="list-unstyled mb-0 d-flex flex-column gap-3">
                                <li class="d-flex align-items-center"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i><span>Social Media Campaign Strategy</span></li>
                                <li class="d-flex align-items-center"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i><span>Content Creation & copywriting</span></li>
                                <li class="d-flex align-items-center"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i><span>SEO Optimization & SEM Ads</span></li>
                                <li class="d-flex align-items-center"><i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i><span>Business Growth & Data Analytics</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 text-center text-white" style="background: radial-gradient(circle, #134074 0%, #0B2545 100%);">
        <div class="container py-5">
            <h2 class="fw-bold mb-3 fs-1">Siap Mulai Akses?</h2>
            <p class="text-white-50 mb-4 mx-auto" style="max-width: 500px;">Masuk ke portal akademik Anda sekarang untuk memantau aktivitas proses belajar mengajar dengan aman.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                @auth
                    <a href="{{ url('/dashboard') }}" class="hero-btn-primary">
                        <i class="bi bi-speedometer2 me-2"></i> Masuk Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="hero-btn-primary">
                        <i class="bi bi-box-arrow-in-right me-2"></i> Masuk Portal
                    </a>
                    <a href="https://monev-santri.petikjombang.com/pmbt" class="hero-btn-secondary">
                        <i class="bi bi-person-plus me-2"></i> Daftar Maba
                    </a>
                @endauth
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-5 text-center">
        <div class="container">
            <div class="fw-bold text-white fs-5 mb-2">
                <i class="bi bi-mortarboard-fill me-2 text-primary"></i>Portal Akademik PeTIK
            </div>
            <p class="mb-1 text-white-50 small">Pesantren Teknologi Informasi dan Komunikasi Jombang</p>
            <p class="mb-0 text-secondary" style="font-size:0.85rem;">&copy; {{ date('Y') }} PeTIK Jombang. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
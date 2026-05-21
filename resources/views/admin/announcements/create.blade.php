<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pengumuman - Portal Akademik PeTIK</title>
    <link rel="icon" href="data:,">
    
    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-blue: #1e40af; /* Elegant Blue */
            --primary-hover: #1e3a8a;
            --sidebar-top: #0f172a; /* Deep Slate/Navy */
            --sidebar-bottom: #1e3a8a; /* Deep Blue */
            --bg-color: #f4f7f9; /* Soft Blue-Gray Background */
            --card-border: #e2e8f0;
        }

        body { 
            background-color: var(--bg-color); 
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #334155;
        }
        
        /* === Sidebar Styles === */
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(160deg, var(--sidebar-top) 0%, var(--sidebar-bottom) 100%);
            width: 260px;
            position: fixed;
            z-index: 1030;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.05);
        }
        .sidebar .portal-brand {
            letter-spacing: 0.5px;
        }
        .sidebar .nav-link {
            color: rgba(255,255,255,0.7);
            padding: 12px 20px;
            border-radius: 10px;
            margin: 4px 12px;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.2s ease;
        }
        .sidebar .nav-link i {
            font-size: 1.1rem;
            transition: transform 0.2s ease;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background: rgba(255,255,255,0.15);
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        .sidebar .nav-link:hover i {
            transform: scale(1.1);
        }
        
        /* === Main Content === */
        .main-content { 
            padding: 30px; 
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            width: 100%;
        }
        
        /* === Cards & Form Fields === */
        .card { 
            border: 1px solid var(--card-border); 
            border-radius: 16px; 
            box-shadow: 0 4px 20px rgba(0,0,0,0.03); 
            background: #ffffff;
        }
        .form-label {
            color: #475569;
            font-size: 0.9rem;
            margin-bottom: 6px;
        }
        .form-control, .form-select {
            border: 1px solid var(--card-border);
            border-radius: 10px;
            padding: 10px 16px;
            font-size: 0.95rem;
            color: #1e293b;
            background-color: #f8fafc;
            transition: all 0.2s ease-in-out;
        }
        .form-control:focus, .form-select:focus {
            background-color: #ffffff;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 4px rgba(30, 64, 175, 0.12);
            color: #0f172a;
        }
        
        /* === Buttons === */
        .btn-primary-custom {
            background-color: var(--primary-blue);
            border: none;
            border-radius: 10px;
            padding: 10px 24px;
            font-weight: 500;
            box-shadow: 0 4px 10px rgba(30, 64, 175, 0.2);
            transition: all 0.3s ease;
            color: white;
        }
        .btn-primary-custom:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(30, 64, 175, 0.3);
            color: white;
        }
        .btn-secondary-custom {
            border: 1px solid var(--card-border);
            background-color: #ffffff;
            color: #64748b;
            border-radius: 10px;
            padding: 10px 24px;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        .btn-secondary-custom:hover {
            background-color: #f1f5f9;
            color: #334155;
            border-color: #cbd5e1;
        }

        /* === Media Queries === */
        @media (min-width: 992px) {
            .main-content { 
                margin-left: 260px; 
                width: calc(100% - 260px);
                padding: 40px;
            }
        }
        @media (max-width: 991.98px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.show {
                transform: translateX(0);
            }
            .main-content { padding: 20px; }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column py-3" id="sidebarMenu">
        <div class="d-flex justify-content-between align-items-center mb-4 mt-2 px-4">
            <div class="w-100">
                <h5 class="text-white fw-bold mb-1 portal-brand">Portal Akademik</h5>
                <small class="text-white-50" style="font-size: 0.8rem;">PeTIK Jombang</small>
            </div>
            <button type="button" class="btn-close btn-close-white d-lg-none" id="btnSidebarClose" aria-label="Close"></button>
        </div>
        <hr class="text-white-50 mx-3 mt-0 mb-3 opacity-25">
        
        @php
            $routeName = \Illuminate\Support\Facades\Route::currentRouteName();
        @endphp
        
        <ul class="nav flex-column gap-1">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ $routeName === 'admin.dashboard' ? 'active' : '' }}">
                    <i class="bi bi-grid-1x2-fill me-3"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.students.index') }}" class="nav-link {{ str_starts_with((string)$routeName, 'admin.students.') ? 'active' : '' }}">
                    <i class="bi bi-people-fill me-3"></i> Mahasantri
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.lecturers.index') }}" class="nav-link {{ str_starts_with((string)$routeName, 'admin.lecturers.') ? 'active' : '' }}">
                    <i class="bi bi-person-badge-fill me-3"></i> Dosen
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.courses.index') }}" class="nav-link {{ str_starts_with((string)$routeName, 'admin.courses.') ? 'active' : '' }}">
                    <i class="bi bi-book-half me-3"></i> Mata Kuliah
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.schedules.index') }}" class="nav-link {{ str_starts_with((string)$routeName, 'admin.schedules.') ? 'active' : '' }}">
                    <i class="bi bi-calendar-event-fill me-3"></i> Jadwal
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.announcements.index') }}" class="nav-link {{ str_starts_with((string)$routeName, 'admin.announcements.') ? 'active' : '' }}">
                    <i class="bi bi-megaphone-fill me-3"></i> Pengumuman
                </a>
            </li>
        </ul>
        
        <div class="mt-auto">
            <hr class="text-white-50 mx-3 opacity-25">
            <form method="POST" action="{{ route('logout') }}" class="px-2">
                @csrf
                <button type="submit" class="nav-link btn btn-link text-start w-100 text-decoration-none">
                    <i class="bi bi-box-arrow-left me-3"></i> Keluar
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header Section -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4 gap-3">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-light border d-lg-none shadow-sm text-primary" type="button" id="btnSidebarToggle">
                    <i class="bi bi-list fs-4"></i>
                </button>
                <div>
                    <h3 class="fw-bold mb-1" style="color: #0f172a;">Tambah Pengumuman</h3>
                    <p class="text-muted mb-0" style="font-size: 0.9rem;">Buat dan publikasikan informasi baru untuk civitas akademik.</p>
                </div>
            </div>
            <a href="{{ route('admin.announcements.index') }}" class="btn btn-secondary-custom text-nowrap d-inline-flex align-items-center gap-2">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </div>

        <!-- Form Card -->
        <div class="card p-4 p-md-5">
            <!-- Validation Errors Block -->
            @if($errors->any())
                <div class="alert alert-danger border-0 shadow-sm mb-4" style="background-color: #fef2f2; color: #991b1b; border-radius: 12px;">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <i class="bi bi-exclamation-triangle-fill fs-5"></i>
                        <span class="fw-bold">Periksa kembali isian Anda:</span>
                    </div>
                    <ul class="mb-0 ps-4 small">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.announcements.store') }}" method="POST">
                @csrf
                <div class="row g-4">
                    <!-- Title Form Field -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">Judul Pengumuman <span class="text-danger">*</span></label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Masukkan judul pengumuman yang jelas dan spesifik" required>
                    </div>
                    
                    <!-- Target Audience Form Field -->
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Target Audience <span class="text-danger">*</span></label>
                        <select name="target" class="form-select" required>
                            <option value="">-- Pilih Target --</option>
                            <option value="all" {{ old('target') == 'all' ? 'selected' : '' }}>Semua Civitas</option>
                            <option value="students" {{ old('target') == 'students' ? 'selected' : '' }}>Mahasantri</option>
                            <option value="lecturers" {{ old('target') == 'lecturers' ? 'selected' : '' }}>Dosen</option>
                        </select>
                    </div>
                    
                    <!-- Content Area Form Field -->
                    <div class="col-12">
                        <label class="form-label fw-semibold">Isi Pengumuman <span class="text-danger">*</span></label>
                        <textarea name="content" class="form-control" rows="8" placeholder="Tuliskan detail, instruksi, atau informasi lengkap di sini..." required>{{ old('content') }}</textarea>
                    </div>
                    
                    <!-- Form Action Buttons -->
                    <div class="col-12 mt-4 pt-2 border-top border-light d-flex gap-2">
                        <button type="submit" class="btn btn-primary-custom d-inline-flex align-items-center gap-2">
                            <i class="bi bi-send-fill"></i> Publikasikan
                        </button>
                        <a href="{{ route('admin.announcements.index') }}" class="btn btn-secondary-custom">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarMenu = document.getElementById('sidebarMenu');
            const btnToggle = document.getElementById('btnSidebarToggle');
            const btnClose = document.getElementById('btnSidebarClose');

            if(btnToggle && sidebarMenu) {
                btnToggle.addEventListener('click', () => {
                    sidebarMenu.classList.add('show');
                });
            }

            if(btnClose && sidebarMenu) {
                btnClose.addEventListener('click', () => {
                    sidebarMenu.classList.remove('show');
                });
            }

            window.addEventListener('resize', () => {
                if (window.innerWidth >= 992) {
                    sidebarMenu.classList.remove('show');
                }
            });
        });
    </script>
</body>
</html>
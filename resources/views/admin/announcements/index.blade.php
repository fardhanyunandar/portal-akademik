<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengumuman - Portal Akademik PeTIK</title>
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
        
        /* === Cards & Tables === */
        .card { 
            border: 1px solid var(--card-border); 
            border-radius: 16px; 
            box-shadow: 0 4px 20px rgba(0,0,0,0.03); 
            overflow: hidden; 
            background: #ffffff;
        }
        .table {
            margin-bottom: 0;
        }
        .table thead th {
            background-color: #f8fafc;
            color: #64748b;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 2px solid var(--card-border);
            padding: 16px;
        }
        .table td {
            vertical-align: middle;
            white-space: nowrap;
            padding: 16px;
            color: #475569;
            border-bottom: 1px solid var(--card-border);
        }
        .table tbody tr {
            transition: background-color 0.2s ease;
        }
        .table tbody tr:hover {
            background-color: #f1f5f9;
        }
        
        /* === Buttons & Badges === */
        .btn-primary-custom {
            background-color: var(--primary-blue);
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
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
        .btn-action {
            border-radius: 8px;
            padding: 6px 12px;
            transition: all 0.2s;
        }
        .badge {
            font-weight: 500;
            letter-spacing: 0.3px;
            border-radius: 6px;
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
                    <h3 class="fw-bold mb-1" style="color: #0f172a;">Pengumuman</h3>
                    <p class="text-muted mb-0" style="font-size: 0.9rem;">Kelola informasi dan pengumuman untuk civitas akademik.</p>
                </div>
            </div>
            <a href="{{ route('admin.announcements.create') }}" class="btn btn-primary-custom text-nowrap d-inline-flex align-items-center gap-2">
                <i class="bi bi-plus-lg"></i> Tambah Pengumuman
            </a>
        </div>

        <!-- Alert -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" style="background-color: #d1fae5; color: #065f46; border-radius: 12px;" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Data Table Card -->
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead>
                            <tr>
                                <th class="ps-4" style="width: 5%">No</th>
                                <th style="width: 35%">Judul Pengumuman</th>
                                <th style="width: 15%">Target Audience</th>
                                <th style="width: 15%">Dibuat Oleh</th>
                                <th style="width: 15%">Tanggal Rilis</th>
                                <th style="width: 10%">Status</th>
                                <th class="text-center" style="width: 5%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($announcements as $index => $announcement)
                            <tr>
                                <td class="ps-4 fw-medium text-muted">{{ $index + 1 }}</td>
                                <td>
                                    <span class="fw-semibold text-dark text-wrap d-block" style="max-width: 320px; line-height: 1.4;">
                                        {{ $announcement->title }}
                                    </span>
                                </td>
                                <td>
                                    @if($announcement->target == 'all')
                                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2">Semua</span>
                                    @elseif($announcement->target == 'students')
                                        <span class="badge bg-success bg-opacity-10 text-success px-3 py-2">Mahasantri</span>
                                    @else
                                        <span class="badge bg-warning bg-opacity-10 text-warning px-3 py-2" style="color: #b45309 !important;">Dosen</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <div class="rounded-circle bg-secondary bg-opacity-10 d-flex justify-content-center align-items-center text-secondary" style="width: 30px; height: 30px; font-size: 0.8rem;">
                                            {{ substr($announcement->user->name, 0, 1) }}
                                        </div>
                                        <span class="fw-medium">{{ $announcement->user->name }}</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-muted"><i class="bi bi-calendar2-event me-2"></i>{{ $announcement->created_at->format('d M Y') }}</span>
                                </td>
                                <td>
                                    @if($announcement->is_published)
                                        <span class="badge bg-success px-3 py-2 rounded-pill"><i class="bi bi-broadcast me-1"></i> Aktif</span>
                                    @else
                                        <span class="badge bg-secondary px-3 py-2 rounded-pill"><i class="bi bi-eye-slash me-1"></i> Draft</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex gap-2 justify-content-center pe-3">
                                        <a href="{{ route('admin.announcements.edit', $announcement->id) }}" class="btn btn-action btn-outline-primary btn-sm" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('admin.announcements.destroy', $announcement->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus pengumuman ini secara permanen?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-action btn-outline-danger btn-sm" title="Hapus">
                                                <i class="bi bi-trash3"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center py-5">
                                    <div class="d-flex flex-column align-items-center justify-content-center text-muted">
                                        <i class="bi bi-megaphone opacity-25" style="font-size: 3rem; margin-bottom: 10px;"></i>
                                        <h6 class="fw-semibold text-secondary">Belum ada pengumuman</h6>
                                        <p class="small mb-0">Pengumuman yang Anda buat akan muncul di sini.</p>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="data:,">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --primary-blue: #1e40af;
            --primary-hover: #1e3a8a;
            --sidebar-top: #0f172a;
            --sidebar-bottom: #1e3a8a;
            --bg-color: #f4f7f9;
            --card-border: #e2e8f0;
        }

        body {
            background-color: var(--bg-color);
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #334155;
        }

        /* === Sidebar === */
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
            color: rgba(255, 255, 255, 0.7);
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

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background: rgba(255, 255, 255, 0.15);
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

        /* === Cards === */
        .card {
            border: 1px solid var(--card-border);
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
            overflow: hidden;
            background: #ffffff;
        }

        .stat-card {
            border-left: 4px solid;
        }

        /* === Tables === */
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

        /* === Buttons === */
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
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        .btn-back-custom {
            border-radius: 10px;
            padding: 8px 16px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        /* === Badges === */
        .badge {
            font-weight: 500;
            letter-spacing: 0.3px;
            border-radius: 8px;
        }

        /* === Forms === */
        .form-control,
        .form-select {
            border-radius: 10px;
            border: 1px solid var(--card-border);
            padding: 10px 14px;
            font-size: 0.95rem;
            transition: all 0.2s;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(30, 64, 175, 0.1);
        }

        .form-label {
            font-weight: 600;
            color: #374151;
            font-size: 0.9rem;
            margin-bottom: 6px;
        }

        /* === Responsive === */
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

            .main-content {
                padding: 20px;
            }
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
            <button type="button" class="btn-close btn-close-white d-lg-none" id="btnSidebarClose"
                aria-label="Close"></button>
        </div>
        <hr class="text-white-50 mx-3 mt-0 mb-3 opacity-25">

        @php
            $routeName = \Illuminate\Support\Facades\Route::currentRouteName();
        @endphp

        <ul class="nav flex-column gap-1">
            <li class="nav-item">
                <a href="{{ route('lecturer.dashboard') }}"
                    class="nav-link {{ $routeName === 'lecturer.dashboard' ? 'active' : '' }}">
                    <i class="bi bi-grid-1x2-fill me-3"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('lecturer.schedules.index') }}"
                    class="nav-link {{ str_starts_with((string) $routeName, 'lecturer.schedules.') ? 'active' : '' }}">
                    <i class="bi bi-calendar-event-fill me-3"></i> Jadwal Mengajar
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('lecturer.attendances.index') }}"
                    class="nav-link {{ str_starts_with((string) $routeName, 'lecturer.attendances.') ? 'active' : '' }}">
                    <i class="bi bi-clipboard-check-fill me-3"></i> Presensi
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('lecturer.grades.index') }}"
                    class="nav-link {{ str_starts_with((string) $routeName, 'lecturer.grades.') ? 'active' : '' }}">
                    <i class="bi bi-journal-richtext me-3"></i> Input Nilai
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('lecturer.materials.index') }}"
                    class="nav-link {{ str_starts_with((string) $routeName, 'lecturer.materials.') ? 'active' : '' }}">
                    <i class="bi bi-file-earmark-text-fill me-3"></i> Materi
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('lecturer.announcements.index') }}"
                    class="nav-link {{ str_starts_with((string) $routeName, 'lecturer.announcements.') ? 'active' : '' }}">
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
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-light border d-lg-none shadow-sm text-primary" type="button" id="btnSidebarToggle">
                    <i class="bi bi-list fs-4"></i>
                </button>
                <div>
                    <h3 class="fw-bold mb-1" style="color: #0f172a;">Input Nilai</h3>
                    <small class="text-muted">Pilih jadwal untuk menginput nilai</small>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="row g-4">
            @forelse($schedules as $schedule)
                <div class="col-xl-4 col-md-6 col-12">
                    <div class="card p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-success bg-opacity-10 p-3 rounded-circle me-3">
                                    <i class="bi bi-journal-richtext text-success fs-5"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-0">{{ $schedule->course->name }}</h6>
                                    <small class="text-muted">{{ $schedule->course->code }}</small>
                                </div>
                            </div>
                            <div class="mb-4">
                                <small class="text-muted d-block mb-1"><i class="bi bi-layers me-2 text-success"></i>
                                    {{ $schedule->course->credits }} SKS</small>
                                <small class="text-muted d-block mb-1"><i
                                        class="bi bi-mortarboard me-2 text-success"></i> Semester
                                    {{ $schedule->semester }}</small>
                                <small class="text-muted d-block"><i class="bi bi-calendar me-2 text-success"></i> TA
                                    {{ $schedule->academic_year }}/{{ $schedule->academic_year + 1 }}</small>
                            </div>
                        </div>
                        <a href="{{ route('lecturer.grades.create', ['schedule_id' => $schedule->id]) }}"
                            class="btn btn-primary-custom text-nowrap d-inline-flex align-items-center gap-2">
                            <i class="bi bi-pencil-square me-2"></i> Input Nilai
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="card p-5 text-center text-muted">
                        <i class="bi bi-inbox fs-1 d-block mb-3 text-success"></i>
                        <p class="mb-0">Belum ada jadwal mengajar</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const sidebarMenu = document.getElementById('sidebarMenu');
            const btnToggle = document.getElementById('btnSidebarToggle');
            const btnClose = document.getElementById('btnSidebarClose');

            if (btnToggle && sidebarMenu) {
                btnToggle.addEventListener('click', () => sidebarMenu.classList.add('show'));
            }
            if (btnClose && sidebarMenu) {
                btnClose.addEventListener('click', () => sidebarMenu.classList.remove('show'));
            }
            window.addEventListener('resize', () => {
                if (window.innerWidth >= 992 && sidebarMenu) {
                    sidebarMenu.classList.remove('show');
                }
            });
        });
    </script>
</body>
</html>
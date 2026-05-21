<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kuliah - Portal Akademik PeTIK</title>
    <link rel="icon" href="data:,">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

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

        .main-content {
            padding: 30px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            width: 100%;
        }

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
                margin-left: 0;
                padding: 20px;
            }
        }

        .card {
            border: 1px solid var(--card-border);
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            background: #ffffff;
            overflow: hidden;
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

        .table tbody tr:hover {
            background-color: #f1f5f9;
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
    </style>
</head>

<body>


    <div class="sidebar d-flex flex-column p-3" id="sidebarMenu">
        <div class="d-flex justify-content-between align-items-center mb-4 mt-2 px-2">
            <div class="text-center w-100">
                <h5 class="text-white fw-bold mb-0">Portal Akademik</h5>
                <small class="text-white-50">PeTIK Jombang</small>
            </div>
            <button type="button" class="btn-close btn-close-white d-lg-none" id="btnSidebarClose"
                aria-label="Close"></button>
        </div>
        <hr class="text-white mt-0">

        @php
            $routeName = \Illuminate\Support\Facades\Route::currentRouteName();
        @endphp
        <ul class="nav flex-column gap-1">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}"
                    class="nav-link {{ $routeName === 'admin.dashboard' ? 'active' : '' }}">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.students.index') }}"
                    class="nav-link {{ str_starts_with((string) $routeName, 'admin.students.') ? 'active' : '' }}">
                    <i class="bi bi-people me-2"></i> Mahasantri
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.lecturers.index') }}"
                    class="nav-link {{ str_starts_with((string) $routeName, 'admin.lecturers.') ? 'active' : '' }}">
                    <i class="bi bi-person-badge me-2"></i> Dosen
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.courses.index') }}"
                    class="nav-link {{ str_starts_with((string) $routeName, 'admin.courses.') ? 'active' : '' }}">
                    <i class="bi bi-book me-2"></i> Mata Kuliah
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.schedules.index') }}"
                    class="nav-link {{ str_starts_with((string) $routeName, 'admin.schedules.') ? 'active' : '' }}">
                    <i class="bi bi-calendar3 me-2"></i> Jadwal
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.announcements.index') }}"
                    class="nav-link {{ str_starts_with((string) $routeName, 'admin.announcements.') ? 'active' : '' }}">
                    <i class="bi bi-megaphone me-2"></i> Pengumuman
                </a>
            </li>
        </ul>
        <div class="mt-auto">
            <hr class="text-white">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="nav-link btn btn-link text-start w-100">
                    <i class="bi bi-box-arrow-left me-2"></i> Logout
                </button>
            </form>
        </div>
    </div>

    <div class="main-content">
        <div class="d-flex justify-content-between align-items-center mb-4 gap-3">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-white border d-lg-none shadow-sm" type="button" id="btnSidebarToggle">
                    <i class="bi bi-list fs-4"></i>
                </button>
                <div>
                    <h4 class="fw-bold mb-0">Jadwal Kuliah</h4>
                    <small class="text-muted">Kelola jadwal perkuliahan</small>
                </div>
            </div>
            <a href="{{ route('admin.schedules.create') }}" class="btn btn-primary text-nowrap">
                <i class="bi bi-plus-circle me-2"></i> Tambah Jadwal
            </a>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-4" style="width: 5%">No</th>
                                <th>Mata Kuliah</th>
                                <th>Dosen</th>
                                <th>Hari</th>
                                <th>Jam</th>
                                <th>Ruangan</th>
                                <th>Semester</th>
                                <th>Status</th>
                                <th class="text-center" style="width: 10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $days = [
                                    'monday' => 'Senin',
                                    'tuesday' => 'Selasa',
                                    'wednesday' => 'Rabu',
                                    'thursday' => 'Kamis',
                                    'friday' => 'Jumat',
                                    'saturday' => 'Sabtu',
                                ];
                            @endphp
                            @forelse($schedules as $index => $schedule)
                                <tr>
                                    <td class="ps-4">{{ $index + 1 }}</td>
                                    <td class="fw-semibold">{{ $schedule->course->name }}</td>
                                    <td>{{ $schedule->lecturer->name }}</td>
                                    <td>{{ $days[$schedule->day] ?? $schedule->day }}</td>
                                    <td>{{ \Carbon\Carbon::parse($schedule->start_time)->format('H:i') }} -
                                        {{ \Carbon\Carbon::parse($schedule->end_time)->format('H:i') }}</td>
                                    <td>{{ $schedule->room ?? '-' }}</td>
                                    <td>Semester {{ $schedule->semester }}</td>
                                    <td>
                                        <span
                                            class="badge {{ $schedule->status == 'active' ? 'bg-success-subtle text-success' : 'bg-secondary-subtle text-secondary' }} px-2.5 py-1.5">
                                            {{ $schedule->status == 'active' ? 'Aktif' : 'Tidak Aktif' }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex gap-1 justify-content-center pe-3">
                                            <a href="{{ route('admin.schedules.edit', $schedule->id) }}"
                                                class="btn btn-sm btn-outline-warning">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('admin.schedules.destroy', $schedule->id) }}"
                                                method="POST" class="d-inline"
                                                onsubmit="return confirm('Yakin ingin menghapus jadwal ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center py-5 text-muted">
                                        <i class="bi bi-inbox fs-2 d-block mb-2 text-black-50"></i>
                                        Belum ada data jadwal
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Logika Javascript untuk Toggle Lempar Sidebar di Mobile
        const sidebarMenu = document.getElementById('sidebarMenu');
        const btnToggle = document.getElementById('btnSidebarToggle');
        const btnClose = document.getElementById('btnSidebarClose');

        if (btnToggle && sidebarMenu) {
            btnToggle.addEventListener('click', () => {
                sidebarMenu.classList.add('show');
            });
        }

        if (btnClose && sidebarMenu) {
            btnClose.addEventListener('click', () => {
                sidebarMenu.classList.remove('show');
            });
        }

        // Reset class 'show' jika layar di-resize kembali ke mode desktop
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 992) {
                sidebarMenu.classList.remove('show');
            }
        });
    </script>
</body>

</html>

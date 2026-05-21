<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal - Portal Akademik PeTIK</title>
    <link rel="icon" href="data:,">
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

        /* Sidebar */
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(160deg, var(--sidebar-top) 0%, var(--sidebar-bottom) 100%);
            width: 260px;
            position: fixed;
            z-index: 1030;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 4px 0 15px rgba(0, 0, 0, 0.05);
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

        /* Layout */
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

        /* Card */
        .card {
            border: 1px solid var(--card-border);
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            background: #ffffff;
            overflow: hidden;
        }

        .btn-primary-custom {
            background-color: var(--primary-blue) !important;
            border: none;
            border-radius: 10px;
            padding: 10px 24px;
            font-weight: 500;
            box-shadow: 0 4px 10px rgba(30, 64, 175, 0.2);
            transition: all 0.2s ease;
            color: white !important;
        }

        .btn-primary-custom:hover {
            background-color: var(--primary-hover) !important;
            transform: translateY(-1px);
            box-shadow: 0 6px 14px rgba(30, 64, 175, 0.25);
            color: white !important;
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
                    <h4 class="fw-bold mb-0">Edit Jadwal</h4>
                    <small class="text-muted">Perbarui jadwal perkuliahan</small>
                </div>
            </div>
            <a href="{{ route('admin.schedules.index') }}" class="btn btn-outline-secondary text-nowrap">
                <i class="bi bi-arrow-left me-2"></i> Kembali
            </a>
        </div>

        <div class="card p-4 shadow-sm">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.schedules.update', $schedule->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Mata Kuliah <span class="text-danger">*</span></label>
                        <select name="course_id" class="form-select" required>
                            <option value="">-- Pilih Mata Kuliah --</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}"
                                    {{ old('course_id', $schedule->course_id) == $course->id ? 'selected' : '' }}>
                                    {{ $course->code }} - {{ $course->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Dosen <span class="text-danger">*</span></label>
                        <select name="lecturer_id" class="form-select" required>
                            <option value="">-- Pilih Dosen --</option>
                            @foreach ($lecturers as $lecturer)
                                <option value="{{ $lecturer->id }}"
                                    {{ old('lecturer_id', $schedule->lecturer_id) == $lecturer->id ? 'selected' : '' }}>
                                    {{ $lecturer->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Hari <span class="text-danger">*</span></label>
                        <select name="day" class="form-select" required>
                            <option value="">-- Pilih Hari --</option>
                            <option value="monday" {{ old('day', $schedule->day) == 'monday' ? 'selected' : '' }}>Senin
                            </option>
                            <option value="tuesday" {{ old('day', $schedule->day) == 'tuesday' ? 'selected' : '' }}>
                                Selasa</option>
                            <option value="wednesday"
                                {{ old('day', $schedule->day) == 'wednesday' ? 'selected' : '' }}>Rabu</option>
                            <option value="thursday" {{ old('day', $schedule->day) == 'thursday' ? 'selected' : '' }}>
                                Kamis</option>
                            <option value="friday" {{ old('day', $schedule->day) == 'friday' ? 'selected' : '' }}>Jumat
                            </option>
                            <option value="saturday" {{ old('day', $schedule->day) == 'saturday' ? 'selected' : '' }}>
                                Sabtu</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Ruangan</label>
                        <input type="text" name="room" class="form-control"
                            value="{{ old('room', $schedule->room) }}" placeholder="Contoh: Lab A">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Jam Mulai <span class="text-danger">*</span></label>
                        <input type="time" name="start_time" class="form-control"
                            value="{{ old('start_time', $schedule->start_time) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Jam Selesai <span class="text-danger">*</span></label>
                        <input type="time" name="end_time" class="form-control"
                            value="{{ old('end_time', $schedule->end_time) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Semester <span class="text-danger">*</span></label>
                        <select name="semester" class="form-select" required>
                            <option value="">-- Pilih Semester --</option>
                            @for ($i = 1; $i <= 8; $i++)
                                <option value="{{ $i }}"
                                    {{ old('semester', $schedule->semester) == $i ? 'selected' : '' }}>Semester
                                    {{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Tahun Akademik <span
                                class="text-danger">*</span></label>
                        <select name="academic_year" class="form-select" required>
                            <option value="">-- Pilih Tahun --</option>
                            @for ($y = date('Y'); $y >= date('Y') - 3; $y--)
                                <option value="{{ $y }}"
                                    {{ old('academic_year', $schedule->academic_year) == $y ? 'selected' : '' }}>
                                    {{ $y }}/{{ $y + 1 }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Status</label>
                        <select name="status" class="form-select">
                            <option value="active"
                                {{ old('status', $schedule->status) == 'active' ? 'selected' : '' }}>Aktif</option>
                            <option value="inactive"
                                {{ old('status', $schedule->status) == 'inactive' ? 'selected' : '' }}>Tidak Aktif
                            </option>
                        </select>
                    </div>
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-primary-custom px-4 me-1">
                            <i class="bi bi-save me-2"></i> Perbarui

                        </button>
                        <a href="{{ route('admin.schedules.index') }}"
                            class="btn btn-outline-secondary px-4">Batal</a>
                    </div>
                </div>
            </form>
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

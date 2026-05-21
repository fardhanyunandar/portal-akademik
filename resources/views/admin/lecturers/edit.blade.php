<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen - Portal Akademik PeTIK</title>
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

        /* === Main Content Layout === */
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

        /* === Cards & Form Fields === */
        .card {
            border: 1px solid var(--card-border);
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.02);
            background: #ffffff;
            overflow: hidden;
        }

        .form-label {
            color: #475569;
            font-size: 0.9rem;
            margin-bottom: 6px;
        }

        .form-control,
        .form-select {
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            padding: 10px 16px;
            font-size: 0.95rem;
            color: #1e293b;
            background-color: #f8fafc;
            transition: all 0.2s ease-in-out;
        }

        .form-control:focus,
        .form-select:focus {
            background-color: #ffffff;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 4px rgba(30, 64, 175, 0.12);
            color: #0f172a;
        }

        /* === Buttons === */
        .btn-primary px-4,
        .btn-primary-custom,
        .btn-primary {
            background-color: var(--primary-blue) !important;
            border: none;
            border-radius: 10px;
            padding: 10px 24px;
            font-weight: 500;
            box-shadow: 0 4px 10px rgba(30, 64, 175, 0.2);
            transition: all 0.2s ease;
            color: white !important;
        }

        .btn-primary:hover {
            background-color: var(--primary-hover) !important;
            transform: translateY(-1px);
            box-shadow: 0 6px 14px rgba(30, 64, 175, 0.25);
            color: white !important;
        }

        .btn-outline-secondary {
            border: 1px solid var(--card-border);
            background-color: #ffffff;
            color: #64748b;
            border-radius: 10px;
            padding: 10px 24px;
            font-weight: 500;
            transition: all 0.2s ease;
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

        .btn-action {
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        .btn-outline-secondary:hover {
            background-color: #f1f5f9;
            color: #334155;
            border-color: #cbd5e1;
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
                    <h4 class="fw-bold mb-0">Edit Dosen</h4>
                    <small class="text-muted">Perbarui data dosen</small>
                </div>
            </div>
            <a href="{{ route('admin.lecturers.index') }}" class="btn btn-outline-secondary text-nowrap">
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

            <form action="{{ route('admin.lecturers.update', $lecturer->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control"
                            value="{{ old('name', $lecturer->name) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">NIP <span class="text-danger">*</span></label>
                        <input type="text" name="nip" class="form-control"
                            value="{{ old('nip', $lecturer->nip) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control"
                            value="{{ old('email', $lecturer->user->email) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Password <small class="text-muted">(kosongkan jika tidak
                                ingin mengubah)</small></label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Jurusan <span class="text-danger">*</span></label>
                        <select name="department_id" class="form-select" required>
                            <option value="">-- Pilih Jurusan --</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}"
                                    {{ old('department_id', $lecturer->department_id) == $department->id ? 'selected' : '' }}>
                                    {{ $department->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Jenis Kelamin <span class="text-danger">*</span></label>
                        <select name="gender" class="form-select" required>
                            <option value="">-- Pilih --</option>
                            <option value="male" {{ old('gender', $lecturer->gender) == 'male' ? 'selected' : '' }}>
                                Laki-laki</option>
                            <option value="female"
                                {{ old('gender', $lecturer->gender) == 'female' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">No. Telepon</label>
                        <input type="text" name="phone" class="form-control"
                            value="{{ old('phone', $lecturer->phone) }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Tempat Lahir</label>
                        <input type="text" name="birth_place" class="form-control"
                            value="{{ old('birth_place', $lecturer->birth_place) }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Tanggal Lahir</label>
                        <input type="date" name="birth_date" class="form-control"
                            value="{{ old('birth_date', $lecturer->birth_date) }}">
                    </div>
                    <div class="col-12">
                        <label class="form-label fw-semibold">Alamat</label>
                        <textarea name="address" class="form-control" rows="3">{{ old('address', $lecturer->address) }}</textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">Status</label>
                        <select name="status" class="form-select">
                            <option value="active"
                                {{ old('status', $lecturer->status) == 'active' ? 'selected' : '' }}>Aktif</option>
                            <option value="inactive"
                                {{ old('status', $lecturer->status) == 'inactive' ? 'selected' : '' }}>Tidak Aktif
                            </option>
                        </select>
                    </div>
                    <div class="col-12 mt-4">
                        <button type="submit" class="btn btn-primary-custom px-4 me-1">
                            <i class="bi bi-save me-2"></i> Perbarui
                        </button>

                        <a href="{{ route('admin.lecturers.index') }}"
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

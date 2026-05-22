<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="data:,">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght=400;500;600;700&display=swap" rel="stylesheet">

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
                    <small class="text-muted">{{ $schedule->course->name }}</small>
                </div>
            </div>
            <a href="{{ route('lecturer.grades.index') }}" class="btn btn-outline-secondary">
                <i class="bi bi-arrow-left me-2"></i> Kembali
            </a>
        </div>

        <!-- Info Formula Nilai Baru -->
        <div class="card p-3 mb-4">
            <div class="row g-3">
                <div class="col-md-3">
                    <small class="text-muted d-block">Mata Kuliah</small>
                    <strong>{{ $schedule->course->name }}</strong>
                </div>
                <div class="col-md-2">
                    <small class="text-muted d-block">Semester</small>
                    <strong>Semester {{ $schedule->semester }}</strong>
                </div>
                <div class="col-md-3">
                    <small class="text-muted d-block">Tahun Akademik</small>
                    <strong>{{ $schedule->academic_year }}/{{ $schedule->academic_year + 1 }}</strong>
                </div>
                <div class="col-md-4">
                    <small class="text-muted d-block">Formula Komponen Nilai</small>
                    <span class="badge bg-light text-dark border">Hadir 5%</span>
                    <span class="badge bg-light text-dark border">Quiz 15%</span>
                    <span class="badge bg-light text-dark border">Tugas 15%</span>
                    <span class="badge bg-light text-dark border">UTS 20%</span>
                    <span class="badge bg-light text-dark border">UAS 20%</span>
                    <span class="badge bg-light text-dark border">Project 25%</span>
                </div>
            </div>
        </div>

        <form action="{{ route('lecturer.grades.store') }}" method="POST">
            @csrf
            <input type="hidden" name="schedule_id" value="{{ $schedule->id }}">

            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th class="ps-4" style="width: 5%">No</th>
                                    <th style="width: 10%">NIM</th>
                                    <th style="width: 15%">Nama</th>
                                    <th class="text-center" style="width: 9%">Hadir (5%)</th>
                                    <th class="text-center" style="width: 9%">Quiz (15%)</th>
                                    <th class="text-center" style="width: 9%">Tugas (15%)</th>
                                    <th class="text-center" style="width: 9%">UTS (20%)</th>
                                    <th class="text-center" style="width: 9%">UAS (20%)</th>
                                    <th class="text-center" style="width: 9%">Project (25%)</th>
                                    <th class="text-center" style="width: 8%">Total</th>
                                    <th class="text-center" style="width: 8%">Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($students as $index => $student)
                                    @php $existing = $existingGrades[$student->id] ?? null; @endphp
                                    <tr class="student-row" data-student-id="{{ $student->id }}">
                                        <td class="ps-4">{{ $index + 1 }}</td>
                                        <td>{{ $student->nim }}</td>
                                        <td>{{ $student->name }}</td>
                                        
                                        <!-- Kehadiran -->
                                        <td>
                                            <input type="number" name="grades[{{ $student->id }}][attendance]"
                                                class="form-control form-control-sm grade-input attendance-input"
                                                min="0" max="100" step="0.01" 
                                                value="{{ $existing ? $existing->attendance : '' }}" placeholder="0">
                                        </td>
                                        
                                        <!-- Quiz -->
                                        <td>
                                            <input type="number" name="grades[{{ $student->id }}][quiz]"
                                                class="form-control form-control-sm grade-input quiz-input"
                                                min="0" max="100" step="0.01" 
                                                value="{{ $existing ? $existing->quiz : '' }}" placeholder="0">
                                        </td>
                                        
                                        <!-- Tugas -->
                                        <td>
                                            <input type="number" name="grades[{{ $student->id }}][assignment]"
                                                class="form-control form-control-sm grade-input assignment-input"
                                                min="0" max="100" step="0.01" 
                                                value="{{ $existing ? $existing->assignment : '' }}" placeholder="0">
                                        </td>
                                        
                                        <!-- UTS -->
                                        <td>
                                            <input type="number" name="grades[{{ $student->id }}][midterm]"
                                                class="form-control form-control-sm grade-input midterm-input"
                                                min="0" max="100" step="0.01" 
                                                value="{{ $existing ? $existing->midterm : '' }}" placeholder="0">
                                        </td>
                                        
                                        <!-- UAS -->
                                        <td>
                                            <input type="number" name="grades[{{ $student->id }}][final_exam]"
                                                class="form-control form-control-sm grade-input final-input"
                                                min="0" max="100" step="0.01" 
                                                value="{{ $existing ? $existing->final_exam : '' }}" placeholder="0">
                                        </td>
                                        
                                        <!-- Project Akhir -->
                                        <td>
                                            <input type="number" name="grades[{{ $student->id }}][project]"
                                                class="form-control form-control-sm grade-input project-input"
                                                min="0" max="100" step="0.01" 
                                                value="{{ $existing ? $existing->project : '' }}" placeholder="0">
                                        </td>
                                        
                                        <!-- Tampilan Total Akhir -->
                                        <td class="text-center fw-bold">
                                            <span class="total-display" id="total_{{ $student->id }}">
                                                {{ $existing ? $existing->total : '0.00' }}
                                            </span>
                                        </td>
                                        
                                        <!-- Tampilan Huruf Mutu / Grade -->
                                        <td class="text-center">
                                            <span class="badge bg-primary id-badge" id="letter_{{ $student->id }}">
                                                {{ $existing ? $existing->letter_grade : '-' }}
                                            </span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="11" class="text-center py-4 text-muted">
                                            <i class="bi bi-inbox fs-4 d-block mb-2"></i>
                                            Belum ada data mahasantri
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            @if ($students->count() > 0)
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary-custom text-nowrap d-inline-flex align-items-center gap-2">
                        <i class="bi bi-save me-2"></i> Simpan Nilai
                    </button>
                    <a href="{{ route('lecturer.grades.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
                </div>
            @endif
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // === Logika Kontrol Sidebar ===
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

            // === Logika Hitung Nilai Otomatis (Real-time) ===
            const tableBody = document.querySelector('table tbody');

            if (tableBody) {
                tableBody.addEventListener('input', function (e) {
                    if (e.target.classList.contains('grade-input')) {
                        const row = e.target.closest('.student-row');
                        if (row) {
                            const studentId = row.getAttribute('data-student-id');
                            calculateRowTotal(row, studentId);
                        }
                    }
                });
            }

            function calculateRowTotal(row, studentId) {
                // Ambil nilai input atau default ke 0 jika kosong
                const attendance = parseFloat(row.querySelector('.attendance-input').value) || 0;
                const quiz = parseFloat(row.querySelector('.quiz-input').value) || 0;
                const assignment = parseFloat(row.querySelector('.assignment-input').value) || 0;
                const midterm = parseFloat(row.querySelector('.midterm-input').value) || 0;
                const finalExam = parseFloat(row.querySelector('.final-input').value) || 0;
                const project = parseFloat(row.querySelector('.project-input').value) || 0;

                // Hitung total berdasarkan formula bobot baru
                const total = (attendance * 0.05) + 
                              (quiz * 0.15) + 
                              (assignment * 0.15) + 
                              (midterm * 0.20) + 
                              (finalExam * 0.20) + 
                              (project * 0.25);

                // Update teks angka total (2 digit di belakang koma)
                const totalDisplay = document.getElementById(`total_${studentId}`);
                if (totalDisplay) {
                    totalDisplay.textContent = total.toFixed(2);
                }

                // Update huruf mutu / grade beserta warna badge
                const letterDisplay = document.getElementById(`letter_${studentId}`);
                if (letterDisplay) {
                    const grade = getLetterGrade(total);
                    letterDisplay.textContent = grade;
                    
                    // Modifikasi warna badge secara dinamis berdasarkan grade
                    letterDisplay.className = "badge";
                    if (grade === 'A') letterDisplay.classList.add('bg-success');
                    else if (grade === 'B') letterDisplay.classList.add('bg-primary');
                    else if (grade === 'C') letterDisplay.classList.add('bg-warning', 'text-dark');
                    else if (grade === 'D') letterDisplay.classList.add('bg-danger');
                    else if (grade === 'E') letterDisplay.classList.add('bg-secondary');
                    else letterDisplay.classList.add('bg-dark');
                }
            }

            // Fungsi penentu konversi Angka ke Huruf Mutu
            function getLetterGrade(score) {
                if (score >= 85) return 'A';
                if (score >= 70) return 'B';
                if (score >= 55) return 'C';
                if (score >= 40) return 'D';
                if (score > 0) return 'E';
                return '-';
            }
        });
    </script>
</body>
</html>
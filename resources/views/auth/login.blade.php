<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Portal Academic PeTIK</title>
    <!-- Bootstrap 5 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-deep: #0B2545;
            --primary-classic: #134074;
            --primary-light: #8DA9C4;
            --bg-ice: #EEF4F8;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body {
            min-height: 100vh;
            background: radial-gradient(circle at 50% 50%, rgba(20, 64, 116, 0.95) 0%, rgba(11, 37, 69, 1) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        /* Decorative Abstract Background Circles */
        body::before {
            content: '';
            position: absolute;
            top: -100px; right: -100px;
            width: 500px; height: 500px;
            background: radial-gradient(circle, rgba(141, 169, 196, 0.08) 0%, rgba(255,255,255,0) 70%);
            border-radius: 50%;
            z-index: 0;
        }
        body::after {
            content: '';
            position: absolute;
            bottom: -150px; left: -150px;
            width: 400px; height: 400px;
            background: radial-gradient(circle, rgba(141, 169, 196, 0.05) 0%, rgba(255,255,255,0) 70%);
            border-radius: 50%;
            z-index: 0;
        }

        .login-wrapper {
            width: 100%;
            max-width: 450px;
            position: relative;
            z-index: 1;
        }

        /* Main Card Refinement */
        .login-card {
            background: white;
            border-radius: 24px;
            padding: 45px 40px;
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.35);
            border: 1px solid rgba(255, 255, 255, 0.8);
        }

        /* Logo Branding */
        .login-logo {
            width: 68px;
            height: 68px;
            background: linear-gradient(135deg, var(--primary-classic), var(--primary-deep));
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 10px 25px rgba(11, 37, 69, 0.25);
        }
        .login-logo i { font-size: 2.2rem; color: white; }

        .login-title {
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--primary-deep);
            text-align: center;
            margin-bottom: 6px;
            letter-spacing: -0.5px;
        }

        .login-subtitle {
            font-size: 0.9rem;
            color: #6c757d;
            text-align: center;
            margin-bottom: 30px;
        }

        /* Role Badges Box */
        .role-info {
            background: var(--bg-ice);
            border-radius: 14px;
            padding: 14px;
            margin-bottom: 30px;
            border: 1px solid rgba(141, 169, 196, 0.2);
        }
        .role-info-title {
            font-size: 0.75rem;
            font-weight: 700;
            color: var(--primary-classic);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }
        .role-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: white;
            border: 1px solid rgba(0,0,0,0.06);
            border-radius: 8px;
            padding: 5px 12px;
            font-size: 0.8rem;
            font-weight: 600;
            color: #495057;
            margin: 3px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }

        /* Custom Form Input Controls */
        .form-label {
            font-size: 0.78rem;
            font-weight: 700;
            color: #495057;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 12px 16px;
            font-size: 0.95rem;
            background: #f8f9fa;
            transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
            color: #222;
        }
        .form-control:focus {
            border-color: var(--primary-classic);
            background: white;
            box-shadow: 0 0 0 4px rgba(19, 64, 116, 0.12);
            outline: none;
        }

        /* Icon Input Placement */
        .input-icon-wrapper { position: relative; }
        .input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary-classic);
            font-size: 1rem;
            z-index: 2;
        }
        .input-icon-wrapper .form-control { padding-left: 42px; }

        /* Smooth Password Eye Toggle Button */
        .toggle-password {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #adb5bd;
            cursor: pointer;
            padding: 0;
            transition: color 0.2s;
            z-index: 3;
        }
        .toggle-password:hover { color: var(--primary-classic); }

        /* Utilities Links */
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .remember-label {
            font-size: 0.85rem;
            color: #555555;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            user-select: none;
        }
        .form-check-input:checked {
            background-color: var(--primary-classic);
            border-color: var(--primary-classic);
        }
        .forgot-link {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--primary-classic);
            text-decoration: none;
            transition: color 0.2s;
        }
        .forgot-link:hover { color: var(--primary-deep); text-decoration: underline; }

        /* Premium Gradient Login Button */
        .btn-login {
            width: 100%;
            background: linear-gradient(135deg, var(--primary-classic), var(--primary-deep));
            color: white;
            border: none;
            border-radius: 12px;
            padding: 14px;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 8px 20px rgba(11, 37, 69, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(11, 37, 69, 0.35);
            color: white;
        }
        .btn-login:disabled {
            background: #99AAB8;
            box-shadow: none;
            cursor: not-allowed;
        }

        /* Alert Notifications */
        .alert-error {
            background: #fff5f5;
            border: 1px solid #fed7d7;
            border-radius: 12px;
            padding: 12px 16px;
            color: #c53030;
            font-size: 0.875rem;
            margin-bottom: 20px;
        }
        .alert-success {
            background: #f0fff4;
            border: 1px solid #c6f6d5;
            border-radius: 12px;
            padding: 12px 16px;
            color: #276749;
            font-size: 0.875rem;
            margin-bottom: 20px;
        }

        /* Bottom Floating Back Navigation Link */
        .back-home {
            text-align: center;
            margin-top: 25px;
        }
        .back-home a {
            color: rgba(255, 255, 255, 0.75);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .back-home a:hover { color: white; transform: translateX(-2px); }
    </style>
</head>
<body>

    <div class="login-wrapper">
        <div class="login-card">
            <!-- Brand Icon -->
            <div class="login-logo">
                <i class="bi bi-mortarboard-fill"></i>
            </div>
            <h1 class="login-title">Selamat Datang</h1>
            <p class="login-subtitle">Masuk ke Portal Akademik PeTIK Jombang</p>

            <!-- Role Mapping Badge Information -->
            <div class="role-info">
                <div class="role-info-title text-center text-lg-start">
                    <i class="bi bi-info-circle-fill me-1"></i> Hak Akses Pengguna
                </div>
                <div class="text-center text-lg-start">
                    <span class="role-badge"><i class="bi bi-people-fill text-primary"></i> Mahasantri</span>
                    <span class="role-badge"><i class="bi bi-person-badge-fill text-success"></i> Dosen</span>
                    <span class="role-badge"><i class="bi bi-shield-lock-fill text-warning"></i> Admin</span>
                </div>
            </div>

            <!-- Laravel Session Status -->
            @if(session('status'))
                <div class="alert-success d-flex align-items-center">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    <div>{{ session('status') }}</div>
                </div>
            @endif

            <!-- Laravel Validation Errors Block -->
            @if($errors->any())
                <div class="alert-error">
                    <div class="d-flex align-items-start mb-1">
                        <i class="bi bi-exclamation-circle-fill me-2 mt-0-5"></i>
                        <span class="fw-bold">Gagal Masuk:</span>
                    </div>
                    <ul class="mb-0 ps-4 small">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Authentication Form Process -->
            <form method="POST" action="{{ route('login') }}" id="loginForm">
                @csrf

                <!-- Input Email -->
                <div class="mb-4">
                    <label class="form-label" for="email">Email Portal</label>
                    <div class="input-icon-wrapper">
                        <i class="bi bi-envelope-fill input-icon"></i>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ old('email') }}"
                            placeholder="nama@petikjombang.com"
                            required autofocus>
                    </div>
                </div>

                <!-- Input Password -->
                <div class="mb-4">
                    <label class="form-label" for="password">Kata Sandi</label>
                    <div class="input-icon-wrapper">
                        <i class="bi bi-lock-fill input-icon"></i>
                        <input type="password" name="password" id="password"
                            class="form-control" style="padding-right: 44px;"
                            placeholder="Masukkan kata sandi Anda"
                            required autocomplete="current-password">
                        <button type="button" class="toggle-password" id="togglePassword" aria-label="Tampilkan kata sandi">
                            <i class="bi bi-eye-fill" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>

                <!-- Configuration Options (Remember and Forgot Password) -->
                <div class="remember-forgot">
                    <label class="remember-label" for="remember">
                        <input type="checkbox" name="remember" class="form-check-input" id="remember">
                        Ingat Sesi Saya
                    </label>
                    @if(Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-link">Lupa Password?</a>
                    @endif
                </div>

                <!-- Action Button Trigger -->
                <button type="submit" class="btn-login" id="submitBtn">
                    <i class="bi bi-box-arrow-in-right fs-5"></i> 
                    <span id="btnText">Masuk Sekarang</span>
                </button>
            </form>
        </div>

        <!-- External Redirection Back To Index Landing Page -->
        <div class="back-home">
            <a href="{{ url('/') }}">
                <i class="bi bi-arrow-left-short fs-4"></i> Kembali ke Halaman Utama
            </a>
        </div>
    </div>

    <!-- Bootstrap Execution scripts Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Password Visibility Mechanism Execution
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function () {
            // Mengubah tipe input data password ke text
            const isPassword = passwordInput.getAttribute('type') === 'password';
            passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
            
            // Mengganti kelas ikon bootcamps secara bergantian
            eyeIcon.className = isPassword ? 'bi bi-eye-slash-fill' : 'bi bi-eye-fill';
        });

        // Form Submit Loading Feedback Animation Handling
        const loginForm = document.getElementById('loginForm');
        const submitBtn = document.getElementById('submitBtn');
        const btnText = document.getElementById('btnText');

        loginForm.addEventListener('submit', function () {
            // Menonaktifkan tombol agar tidak diklik berkali-kali saat proses kirim data
            submitBtn.disabled = true;
            // Menampilkan animasi spinner loading
            btnText.innerHTML = 'Memverifikasi Data...';
            submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> ` + btnText.innerHTML;
        });
    </script>
</body>
</html>
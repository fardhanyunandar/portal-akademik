<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password | Portal Akademik PeTIK</title>
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

        .wrapper {
            width: 100%;
            max-width: 450px;
            position: relative;
            z-index: 1;
        }

        /* Main Card Style Consistency */
        .card {
            background: white;
            border-radius: 24px;
            padding: 45px 40px;
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.35);
            border: 1px solid rgba(255, 255, 255, 0.8);
        }

        /* Branding Box Icon */
        .logo {
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
        .logo i { font-size: 2.2rem; color: white; }

        .card-title {
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--primary-deep);
            text-align: center;
            margin-bottom: 6px;
            letter-spacing: -0.5px;
        }

        .card-subtitle {
            font-size: 0.9rem;
            color: #6c757d;
            text-align: center;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        /* Information Guide Box */
        .info-box {
            background: var(--bg-ice);
            border-radius: 14px;
            padding: 15px;
            margin-bottom: 25px;
            display: flex;
            gap: 12px;
            align-items: flex-start;
            border: 1px solid rgba(141, 169, 196, 0.2);
        }
        .info-box i {
            color: var(--primary-classic);
            font-size: 1.25rem;
            flex-shrink: 0;
        }
        .info-box p {
            font-size: 0.85rem;
            color: #495057;
            margin: 0;
            line-height: 1.6;
        }

        /* Form Styling Control */
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
            padding: 12px 16px 12px 42px;
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
        .form-control::placeholder { color: #adb5bd; }

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

        /* Premium Action Submit Button */
        .btn-submit {
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
            margin-top: 25px;
        }
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(11, 37, 69, 0.35);
            color: white;
        }
        .btn-submit:disabled {
            background: #99AAB8;
            box-shadow: none;
            cursor: not-allowed;
        }

        /* System Messages Feedback Alert */
        .alert-success {
            background: #f0fff4;
            border: 1px solid #c6f6d5;
            border-radius: 12px;
            padding: 12px 16px;
            color: #276749;
            font-size: 0.875rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .alert-error {
            background: #fff5f5;
            border: 1px solid #fed7d7;
            border-radius: 12px;
            padding: 12px 16px;
            color: #c53030;
            font-size: 0.875rem;
            margin-bottom: 20px;
        }

        /* Bottom Redirect Back Link navigation link */
        .back-link {
            text-align: center;
            margin-top: 25px;
        }
        .back-link a {
            color: rgba(255, 255, 255, 0.75);
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .back-link a:hover { color: white; transform: translateX(-2px); }
    </style>
</head>
<body>

    <div class="wrapper">
        <div class="card">
            <!-- Brand Icon -->
            <div class="logo">
                <i class="bi bi-shield-lock-fill"></i>
            </div>
            <h1 class="card-title">Lupa Password?</h1>
            <p class="card-subtitle">Tenang, kami akan bantu memulihkan akses masuk ke akun Portal Akademik Anda.</p>

            <!-- Info Directive Box -->
            <div class="info-box">
                <i class="bi bi-info-circle-fill"></i>
                <p>Silakan isi alamat email resmi Anda yang terdaftar. Sistem akan segera mengirimkan tautan verifikasi pemulihan kata sandi baru.</p>
            </div>

            <!-- Laravel Password Reset Status Alert -->
            @if(session('status'))
                <div class="alert-success">
                    <i class="bi bi-check-circle-fill"></i>
                    <div>{{ session('status') }}</div>
                </div>
            @endif

            <!-- Laravel System Errors Validation Block -->
            @if($errors->any())
                <div class="alert-error">
                    <div class="d-flex align-items-start mb-1">
                        <i class="bi bi-exclamation-circle-fill me-2 mt-0-5"></i>
                        <span class="fw-bold">Terjadi Kesalahan:</span>
                    </div>
                    <ul class="mb-0 ps-4 small">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form Reset Trigger Execution -->
            <form method="POST" action="{{ route('password.email') }}" id="resetForm">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="email">Email Terdaftar</label>
                    <div class="input-icon-wrapper">
                        <i class="bi bi-envelope-fill input-icon"></i>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ old('email') }}"
                            placeholder="nama@petikjombang.com"
                            required autofocus>
                    </div>
                </div>

                <button type="submit" class="btn-submit" id="submitBtn">
                    <i class="bi bi-send-fill fs-6"></i> 
                    <span id="btnText">Kirim Link Reset Password</span>
                </button>
            </form>
        </div>

        <!-- External Redirection Navigation to Previous Page Route -->
        <div class="back-link">
            <a href="{{ route('login') }}">
                <i class="bi bi-arrow-left-short fs-4"></i> Kembali ke Halaman Login
            </a>
        </div>
    </div>

    <!-- Bootstrap Execution scripts Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Form Submit Loading State Animation Feedback
        const resetForm = document.getElementById('resetForm');
        const submitBtn = document.getElementById('submitBtn');
        const btnText = document.getElementById('btnText');

        resetForm.addEventListener('submit', function () {
            // Menonaktifkan tombol agar tidak diproses berulang kali
            submitBtn.disabled = true;
            // Memberikan teks penunjuk animasi kirim data
            btnText.innerHTML = 'Mengirim Tautan Pemulihan...';
            submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> ` + btnText.innerHTML;
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="https://cdn.tailwindcss.com"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>
    <body class="font-sans antialiased bg-gradient-to-br from-emerald-50 via-slate-50 to-emerald-100 min-h-screen flex flex-col justify-center items-center p-4">
        
        <div class="w-full sm:max-w-md bg-white/90 backdrop-blur-md p-8 rounded-2xl shadow-xl shadow-slate-200/50 border border-emerald-500/10">
            <div class="mb-6 text-center">
                <div class="mx-auto mb-3 flex h-14 w-14 items-center justify-center rounded-2xl bg-emerald-600 text-white shadow-lg shadow-emerald-600/30">
                    <i class="fa-solid fa-graduation-cap text-2xl"></i>
                </div>
                <h2 class="text-2xl font-bold tracking-tight text-slate-800">Masuk Portal</h2>
                <p class="text-xs text-slate-500 mt-1">SIAKAD Mahasantri PeTIK Jombang</p>
            </div>

            {{ $slot }}
        </div>

    </body>
</html>
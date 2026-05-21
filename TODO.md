# TODO - Upgrade Tampilan Halaman Dosen

## Tahap 1: Shared layout lecturer

- [x] Buat partial sidebar dosen: `resources/views/lecturer/partials/sidebar.blade.php` (disamakan dengan sidebar admin)

- [x] Buat partial layout/wrapper lecturer: `resources/views/lecturer/partials/layout.blade.php` (menyediakan main-content wrapper + JS toggle konsisten)

## Tahap 2: Update halaman dosen (semua bagian yang terlihat)

- [x] Update `resources/views/lecturer/dashboard.blade.php` untuk menggunakan partial

- [x] Update `resources/views/lecturer/schedules/index.blade.php` untuk menggunakan partial

- [x] Update `resources/views/lecturer/schedules/create.blade.php` untuk menggunakan partial

- [x] Update `resources/views/lecturer/schedules/edit.blade.php` untuk menggunakan partial

- [x] Update `resources/views/lecturer/attendances/index.blade.php` untuk menggunakan partial

- [x] Update `resources/views/lecturer/attendances/create.blade.php` untuk menggunakan partial

- [x] Update `resources/views/lecturer/materials/index.blade.php` untuk menggunakan partial

- [x] Update `resources/views/lecturer/materials/create.blade.php` untuk menggunakan partial

## Tahap 3: QA

- [x] Cek setiap halaman: toggle sidebar, active nav, dan gaya card/table/form
- [x] Pastikan tidak ada JS yang merefer ID yang tidak ada

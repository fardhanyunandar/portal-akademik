<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('students', \App\Http\Controllers\Admin\StudentController::class);
    Route::resource('lecturers', \App\Http\Controllers\Admin\LecturerController::class);
    Route::resource('courses', \App\Http\Controllers\Admin\CourseController::class);
    Route::resource('schedules', \App\Http\Controllers\Admin\ScheduleController::class);
    Route::resource('announcements', \App\Http\Controllers\Admin\AnnouncementController::class);
});

// Lecturer Routes
Route::middleware(['auth'])->prefix('lecturer')->name('lecturer.')->group(function () {
    Route::get('/dashboard-debug', [\App\Http\Controllers\Lecturer\DashboardDebugController::class, 'index'])->name('dashboard.debug');
    Route::get('/dashboard', [\App\Http\Controllers\Lecturer\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('schedules', \App\Http\Controllers\Lecturer\ScheduleController::class);
    Route::resource('attendances', \App\Http\Controllers\Lecturer\AttendanceController::class);
    Route::resource('grades', \App\Http\Controllers\Lecturer\GradeController::class);
    Route::resource('materials', \App\Http\Controllers\Lecturer\MaterialController::class);
    Route::resource('announcements', \App\Http\Controllers\Lecturer\AnnouncementController::class);
});


// Student Routes
Route::middleware(['auth'])->prefix('student')->name('student.')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Student\DashboardController::class, 'index'])->name('dashboard');


    Route::get('/profile', [\App\Http\Controllers\Student\ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [\App\Http\Controllers\Student\ProfileController::class, 'update'])->name('profile.update');
    Route::get('/schedules', [\App\Http\Controllers\Student\ScheduleController::class, 'index'])->name('schedules');
    Route::get('/attendances', [\App\Http\Controllers\Student\AttendanceController::class, 'index'])->name('attendances');
    Route::get('/grades', [\App\Http\Controllers\Student\GradeController::class, 'index'])->name('grades');
    Route::get('/materials', [\App\Http\Controllers\Student\MaterialController::class, 'index'])->name('materials');
    Route::get('/announcements', [\App\Http\Controllers\Student\AnnouncementController::class, 'index'])->name('announcements');
});

require __DIR__.'/auth.php';
<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $student = auth()->user()->student;

        // Mata Kuliah: infer dari data presensi student (lebih "real" untuk student yang bersangkutan)
        $totalCourses = \App\Models\Attendance::where('student_id', $student->id)
            ->distinct('schedule_id')
            ->count('schedule_id');

        // Kehadiran: hitung total schedule yang sudah punya data attendance untuk student
        $totalAttendance = \App\Models\Attendance::where('student_id', $student->id)->count();
        $presentAttendance = \App\Models\Attendance::where('student_id', $student->id)
            ->where('status', 'present')
            ->count();
        $attendancePercentage = $totalAttendance > 0
            ? round(($presentAttendance / $totalAttendance) * 100)
            : 0;

        // Materi Tersedia: materi dari schedule aktif milik course yang muncul pada attendance student
        $scheduleIds = \App\Models\Attendance::where('student_id', $student->id)
            ->distinct('schedule_id')
            ->pluck('schedule_id');

        $materialsAvailable = $scheduleIds->isNotEmpty()
            ? \App\Models\Material::whereIn('schedule_id', $scheduleIds)->count()
            : 0;

        // Pengumuman Terbaru (real)
        $announcements = \App\Models\Announcement::with('user')
            ->where('is_published', true)
            ->whereIn('target', ['all', 'students'])
            ->latest()
            ->limit(5)
            ->get();

        return view('student.dashboard', compact(
            'totalCourses',
            'attendancePercentage',
            'materialsAvailable',
            'announcements'
        ));
    }
}


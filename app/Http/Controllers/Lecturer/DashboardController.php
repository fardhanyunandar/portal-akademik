<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Lecturer;
use App\Models\Material;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Lecturer table menyimpan user_id yang merefer ke akun login
        $lecturer = Lecturer::query()->where('user_id', $user->id)->first();

        if (!$lecturer) {
            return view('lecturer.dashboard', [
                'totalMataKuliah' => 0,
                'totalMahasantri' => 0,
                'totalMateri' => 0,
            ]);
        }

        // totalMataKuliah: distinct course_id dari schedules milik lecturer
        $totalMataKuliah = Schedule::query()
            ->where('lecturer_id', $lecturer->id)
            ->distinct('course_id')
            ->count('course_id');

        // totalMahasantri: distinct student_id dari attendances milik lecturer (melalui schedule)
        $totalMahasantri = Attendance::query()
            ->whereHas('schedule', function ($q) use ($lecturer) {
                $q->where('lecturer_id', $lecturer->id);
            })
            ->distinct('student_id')
            ->count('student_id');

        // totalMateri: jumlah material milik lecturer
        $totalMateri = Material::query()
            ->where('lecturer_id', $lecturer->id)
            ->count();

        return view('lecturer.dashboard', [
            'totalMataKuliah' => $totalMataKuliah,
            'totalMahasantri' => $totalMahasantri,
            'totalMateri' => $totalMateri,
        ]);
    }
}


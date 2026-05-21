<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Lecturer;
use App\Models\Material;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;

class DashboardDebugController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $lecturer = Lecturer::query()->where('user_id', $user?->id)->first();

        $totalMataKuliah = 0;
        $totalMahasantri = 0;
        $totalMateri = 0;

        if ($lecturer) {
            $totalMataKuliah = Schedule::query()
                ->where('lecturer_id', $lecturer->id)
                ->distinct('course_id')
                ->count('course_id');

            $totalMahasantri = Attendance::query()
                ->whereHas('schedule', function ($q) use ($lecturer) {
                    $q->where('lecturer_id', $lecturer->id);
                })
                ->distinct('student_id')
                ->count('student_id');

            $totalMateri = Material::query()
                ->where('lecturer_id', $lecturer->id)
                ->count();
        }

        return response()->json([
            'auth_user_id' => $user?->id,
            'lecturer' => $lecturer?->toArray(),
            'totalMataKuliah' => $totalMataKuliah,
            'totalMahasantri' => $totalMahasantri,
            'totalMateri' => $totalMateri,
        ]);
    }
}


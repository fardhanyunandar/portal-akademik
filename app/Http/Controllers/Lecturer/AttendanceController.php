<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Schedule;
use App\Models\Student;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $lecturer = auth()->user()->lecturer;
        $schedules = Schedule::with('course')
            ->where('lecturer_id', $lecturer->id)
            ->where('status', 'active')
            ->get();
        return view('lecturer.attendances.index', compact('schedules'));
    }

    public function create(Request $request)
    {
        $schedule = Schedule::with('course')->findOrFail($request->schedule_id);
        $lecturer = auth()->user()->lecturer;
        $students = Student::where('status', 'active')
            ->where('department_id', $lecturer->department_id)
            ->get();
        $date = $request->date ?? date('Y-m-d');
        $existingAttendances = Attendance::where('schedule_id', $schedule->id)
            ->where('date', $date)
            ->get()
            ->keyBy('student_id');
        return view('lecturer.attendances.create', compact('schedule', 'students', 'date', 'existingAttendances'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'schedule_id' => 'required|exists:schedules,id',
            'date'        => 'required|date',
            'attendance'  => 'required|array',
        ]);

        foreach ($request->attendance as $student_id => $status) {
            Attendance::updateOrCreate(
                [
                    'student_id'  => $student_id,
                    'schedule_id' => $request->schedule_id,
                    'date'        => $request->date,
                ],
                [
                    'status' => $status,
                    'notes'  => $request->notes[$student_id] ?? null,
                ]
            );
        }

        return redirect()->route('lecturer.attendances.index')
            ->with('success', 'Presensi berhasil disimpan.');
    }
}
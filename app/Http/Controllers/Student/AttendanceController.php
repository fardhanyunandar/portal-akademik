<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\Schedule;

class AttendanceController extends Controller
{
    public function index()
    {
        $student = auth()->user()->student;
        $attendances = Attendance::with(['schedule.course'])
            ->where('student_id', $student->id)
            ->latest()
            ->get();

        $schedules = Schedule::with('course')
            ->whereHas('course', function($q) use ($student) {
                $q->where('department_id', $student->department_id);
            })
            ->where('status', 'active')
            ->get();

        $summary = [];
        foreach ($schedules as $schedule) {
            $total = Attendance::where('student_id', $student->id)
                ->where('schedule_id', $schedule->id)
                ->count();
            $present = Attendance::where('student_id', $student->id)
                ->where('schedule_id', $schedule->id)
                ->where('status', 'present')
                ->count();
            $summary[] = [
                'course'     => $schedule->course->name,
                'total'      => $total,
                'present'    => $present,
                'percentage' => $total > 0 ? round(($present / $total) * 100) : 0,
            ];
        }

        return view('student.attendances.index', compact('attendances', 'summary'));
    }
}
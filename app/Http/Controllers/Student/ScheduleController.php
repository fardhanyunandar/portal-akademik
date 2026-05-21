<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        $student = auth()->user()->student;
        $schedules = Schedule::with(['course', 'lecturer'])
            ->whereHas('course', function($q) use ($student) {
                $q->where('department_id', $student->department_id);
            })
            ->where('status', 'active')
            ->get();
        return view('student.schedules.index', compact('schedules'));
    }
}
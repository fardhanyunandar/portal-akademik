<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Grade;

class GradeController extends Controller
{
    public function index()
    {
        $student = auth()->user()->student;
        $grades = Grade::with(['course', 'lecturer'])
            ->where('student_id', $student->id)
            ->latest()
            ->get();
        return view('student.grades.index', compact('grades'));
    }
}
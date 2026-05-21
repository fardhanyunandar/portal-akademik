<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use App\Models\Grade;
use App\Models\Schedule;
use App\Models\Student;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $lecturer = auth()->user()->lecturer;
        $schedules = Schedule::with('course')
            ->where('lecturer_id', $lecturer->id)
            ->where('status', 'active')
            ->get();
        return view('lecturer.grades.index', compact('schedules'));
    }

    public function create(Request $request)
    {
        $schedule = Schedule::with('course')->findOrFail($request->schedule_id);
        $lecturer = auth()->user()->lecturer;
        $students = Student::where('status', 'active')
            ->where('department_id', $lecturer->department_id)
            ->get();
        $existingGrades = Grade::where('course_id', $schedule->course_id)
            ->where('lecturer_id', $lecturer->id)
            ->where('semester', $schedule->semester)
            ->where('academic_year', $schedule->academic_year)
            ->get()
            ->keyBy('student_id');
        return view('lecturer.grades.create', compact('schedule', 'students', 'existingGrades', 'lecturer'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'schedule_id' => 'required|exists:schedules,id',
            'grades'      => 'required|array',
        ]);

        $schedule = Schedule::findOrFail($request->schedule_id);
        $lecturer = auth()->user()->lecturer;

        foreach ($request->grades as $student_id => $gradeData) {
            $assignment = $gradeData['assignment'] ?? 0;
            $midterm    = $gradeData['midterm'] ?? 0;
            $final_exam = $gradeData['final_exam'] ?? 0;
            $total      = ($assignment * 0.3) + ($midterm * 0.35) + ($final_exam * 0.35);

            $letter = 'E';
            if ($total >= 85) $letter = 'A';
            elseif ($total >= 75) $letter = 'B';
            elseif ($total >= 65) $letter = 'C';
            elseif ($total >= 55) $letter = 'D';

            Grade::updateOrCreate(
                [
                    'student_id'    => $student_id,
                    'course_id'     => $schedule->course_id,
                    'lecturer_id'   => $lecturer->id,
                    'semester'      => $schedule->semester,
                    'academic_year' => $schedule->academic_year,
                ],
                [
                    'assignment'   => $assignment,
                    'midterm'      => $midterm,
                    'final_exam'   => $final_exam,
                    'total'        => round($total, 2),
                    'letter_grade' => $letter,
                ]
            );
        }

        return redirect()->route('lecturer.grades.index')
            ->with('success', 'Nilai berhasil disimpan.');
    }
}
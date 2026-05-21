<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\Course;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with(['course', 'lecturer'])->latest()->get();
        return view('lecturer.schedules.index', compact('schedules'));
    }


    public function create()
    {
        $courses = Course::where('status', 'active')->get();
        $lecturers = Lecturer::where('status', 'active')->get();
        return view('lecturer.schedules.create', compact('courses', 'lecturers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id'     => 'required|exists:courses,id',
            'lecturer_id'   => 'required|exists:lecturers,id',
            'day'           => 'required|in:monday,tuesday,wednesday,thursday,friday,saturday',
            'start_time'    => 'required',
            'end_time'      => 'required',
            'room'          => 'nullable|string',
            'semester'      => 'required|integer|min:1|max:8',
            'academic_year' => 'required|integer',
        ]);

        Schedule::create([
            'course_id'     => $request->course_id,
            'lecturer_id'   => $request->lecturer_id,
            'day'           => $request->day,
            'start_time'    => $request->start_time,
            'end_time'      => $request->end_time,
            'room'          => $request->room,
            'semester'      => $request->semester,
            'academic_year' => $request->academic_year,
            'status'        => 'active',
        ]);

        return redirect()->route('lecturer.schedules.index')
            ->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function edit(Schedule $schedule)
    {
        $courses = Course::where('status', 'active')->get();
        $lecturers = Lecturer::where('status', 'active')->get();
        return view('lecturer.schedules.edit', compact('schedule', 'courses', 'lecturers'));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([
            'course_id'     => 'required|exists:courses,id',
            'lecturer_id'   => 'required|exists:lecturers,id',
            'day'           => 'required|in:monday,tuesday,wednesday,thursday,friday,saturday',
            'start_time'    => 'required',
            'end_time'      => 'required',
            'room'          => 'nullable|string',
            'semester'      => 'required|integer|min:1|max:8',
            'academic_year' => 'required|integer',
        ]);

        $schedule->update([
            'course_id'     => $request->course_id,
            'lecturer_id'   => $request->lecturer_id,
            'day'           => $request->day,
            'start_time'    => $request->start_time,
            'end_time'      => $request->end_time,
            'room'          => $request->room,
            'semester'      => $request->semester,
            'academic_year' => $request->academic_year,
            'status'        => $request->status ?? 'active',
        ]);

        return redirect()->route('lecturer.schedules.index')
            ->with('success', 'Jadwal berhasil diperbarui.');
    }

    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('lecturer.schedules.index')
            ->with('success', 'Jadwal berhasil dihapus.');
    }
}
<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('department')->latest()->get();
        return view('admin.courses.index', compact('courses'));
    }

    public function create()
    {
        $departments = Department::where('status', 'active')->get();
        return view('admin.courses.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'code'          => 'required|string|unique:courses',
            'name'          => 'required|string|max:255',
            'description'   => 'nullable|string',
            'credits'       => 'required|integer|min:1|max:6',
            'semester'      => 'required|integer|min:1|max:8',
        ]);

        Course::create([
            'department_id' => $request->department_id,
            'code'          => $request->code,
            'name'          => $request->name,
            'description'   => $request->description,
            'credits'       => $request->credits,
            'semester'      => $request->semester,
            'status'        => 'active',
        ]);

        return redirect()->route('admin.courses.index')
            ->with('success', 'Mata kuliah berhasil ditambahkan.');
    }

    public function edit(Course $course)
    {
        $departments = Department::where('status', 'active')->get();
        return view('admin.courses.edit', compact('course', 'departments'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'code'          => 'required|string|unique:courses,code,' . $course->id,
            'name'          => 'required|string|max:255',
            'description'   => 'nullable|string',
            'credits'       => 'required|integer|min:1|max:6',
            'semester'      => 'required|integer|min:1|max:8',
        ]);

        $course->update([
            'department_id' => $request->department_id,
            'code'          => $request->code,
            'name'          => $request->name,
            'description'   => $request->description,
            'credits'       => $request->credits,
            'semester'      => $request->semester,
            'status'        => $request->status ?? 'active',
        ]);

        return redirect()->route('admin.courses.index')
            ->with('success', 'Mata kuliah berhasil diperbarui.');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('admin.courses.index')
            ->with('success', 'Mata kuliah berhasil dihapus.');
    }
}
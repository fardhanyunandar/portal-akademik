<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with(['user', 'department'])->latest()->get();
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        $departments = Department::where('status', 'active')->get();
        return view('admin.students.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'nim'           => 'required|string|unique:students',
            'email'         => 'required|email|unique:users',
            'password'      => 'required|min:6',
            'department_id' => 'required|exists:departments,id',
            'phone'         => 'nullable|string',
            'address'       => 'nullable|string',
            'gender'        => 'required|in:male,female',
            'birth_date'    => 'nullable|date',
            'birth_place'   => 'nullable|string',
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => 'student',
        ]);

        Student::create([
            'user_id'       => $user->id,
            'department_id' => $request->department_id,
            'nim'           => $request->nim,
            'name'          => $request->name,
            'phone'         => $request->phone,
            'address'       => $request->address,
            'gender'        => $request->gender,
            'birth_date'    => $request->birth_date,
            'birth_place'   => $request->birth_place,
            'status'        => 'active',
        ]);

        return redirect()->route('admin.students.index')
            ->with('success', 'Mahasantri berhasil ditambahkan.');
    }

    public function edit(Student $student)
    {
        $departments = Department::where('status', 'active')->get();
        return view('admin.students.edit', compact('student', 'departments'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'nim'           => 'required|string|unique:students,nim,' . $student->id,
            'email'         => 'required|email|unique:users,email,' . $student->user_id,
            'department_id' => 'required|exists:departments,id',
            'phone'         => 'nullable|string',
            'address'       => 'nullable|string',
            'gender'        => 'required|in:male,female',
            'birth_date'    => 'nullable|date',
            'birth_place'   => 'nullable|string',
        ]);

        $student->user->update([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        if ($request->password) {
            $student->user->update([
                'password' => Hash::make($request->password),
            ]);
        }

        $student->update([
            'department_id' => $request->department_id,
            'nim'           => $request->nim,
            'name'          => $request->name,
            'phone'         => $request->phone,
            'address'       => $request->address,
            'gender'        => $request->gender,
            'birth_date'    => $request->birth_date,
            'birth_place'   => $request->birth_place,
        ]);

        return redirect()->route('admin.students.index')
            ->with('success', 'Data mahasantri berhasil diperbarui.');
    }

    public function destroy(Student $student)
    {
        $student->user->delete();
        return redirect()->route('admin.students.index')
            ->with('success', 'Mahasantri berhasil dihapus.');
    }
}

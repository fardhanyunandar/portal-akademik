<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Lecturer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LecturerController extends Controller
{
    public function index()
    {
        $lecturers = Lecturer::with(['user', 'department'])->latest()->get();
        return view('admin.lecturers.index', compact('lecturers'));
    }

    public function create()
    {
        $departments = Department::where('status', 'active')->get();
        return view('admin.lecturers.create', compact('departments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'nip'           => 'required|string|unique:lecturers',
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
            'role'     => 'lecturer',
        ]);

        Lecturer::create([
            'user_id'       => $user->id,
            'department_id' => $request->department_id,
            'nip'           => $request->nip,
            'name'          => $request->name,
            'phone'         => $request->phone,
            'address'       => $request->address,
            'gender'        => $request->gender,
            'birth_date'    => $request->birth_date,
            'birth_place'   => $request->birth_place,
            'status'        => 'active',
        ]);

        return redirect()->route('admin.lecturers.index')
            ->with('success', 'Dosen berhasil ditambahkan.');
    }

    public function edit(Lecturer $lecturer)
    {
        $departments = Department::where('status', 'active')->get();
        return view('admin.lecturers.edit', compact('lecturer', 'departments'));
    }

    public function update(Request $request, Lecturer $lecturer)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'nip'           => 'required|string|unique:lecturers,nip,' . $lecturer->id,
            'email'         => 'required|email|unique:users,email,' . $lecturer->user_id,
            'department_id' => 'required|exists:departments,id',
            'phone'         => 'nullable|string',
            'address'       => 'nullable|string',
            'gender'        => 'required|in:male,female',
            'birth_date'    => 'nullable|date',
            'birth_place'   => 'nullable|string',
        ]);

        $lecturer->user->update([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        if ($request->password) {
            $lecturer->user->update([
                'password' => Hash::make($request->password),
            ]);
        }

        $lecturer->update([
            'department_id' => $request->department_id,
            'nip'           => $request->nip,
            'name'          => $request->name,
            'phone'         => $request->phone,
            'address'       => $request->address,
            'gender'        => $request->gender,
            'birth_date'    => $request->birth_date,
            'birth_place'   => $request->birth_place,
        ]);

        return redirect()->route('admin.lecturers.index')
            ->with('success', 'Data dosen berhasil diperbarui.');
    }

    public function destroy(Lecturer $lecturer)
    {
        $lecturer->user->delete();
        return redirect()->route('admin.lecturers.index')
            ->with('success', 'Dosen berhasil dihapus.');
    }
}
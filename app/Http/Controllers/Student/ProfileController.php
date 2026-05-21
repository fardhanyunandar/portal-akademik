<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $student = auth()->user()->student;
        return view('student.profile.index', compact('student'));
    }

    public function update(Request $request)
    {
        $student = auth()->user()->student;

        $request->validate([
            'phone'       => 'nullable|string',
            'address'     => 'nullable|string',
            'birth_place' => 'nullable|string',
            'birth_date'  => 'nullable|date',
        ]);

        $student->update([
            'phone'       => $request->phone,
            'address'     => $request->address,
            'birth_place' => $request->birth_place,
            'birth_date'  => $request->birth_date,
        ]);

        return redirect()->route('student.profile')
            ->with('success', 'Data pribadi berhasil diperbarui.');
    }
}
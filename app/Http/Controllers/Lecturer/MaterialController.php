<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    public function index()
    {
        $lecturer = auth()->user()->lecturer;
        $materials = Material::with(['schedule.course'])
            ->where('lecturer_id', $lecturer->id)
            ->latest()
            ->get();
        return view('lecturer.materials.index', compact('materials'));
    }

    public function create()
    {
        $lecturer = auth()->user()->lecturer;
        $schedules = Schedule::with('course')
            ->where('lecturer_id', $lecturer->id)
            ->where('status', 'active')
            ->get();
        return view('lecturer.materials.create', compact('schedules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'schedule_id'    => 'required|exists:schedules,id',
            'title'          => 'required|string|max:255',
            'description'    => 'nullable|string',
            'meeting_number' => 'required|integer|min:1',
            'file'           => 'nullable|file|mimes:pdf,doc,docx,ppt,pptx,xls,xlsx,zip|max:10240',
        ]);

        $lecturer = auth()->user()->lecturer;
        $file_path = null;
        $file_name = null;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file_path = $file->store('materials', 'public');
        }

        Material::create([
            'schedule_id'    => $request->schedule_id,
            'lecturer_id'    => $lecturer->id,
            'title'          => $request->title,
            'description'    => $request->description,
            'file_path'      => $file_path,
            'file_name'      => $file_name,
            'meeting_number' => $request->meeting_number,
        ]);

        return redirect()->route('lecturer.materials.index')
            ->with('success', 'Materi berhasil diupload.');
    }

    public function destroy(Material $material)
    {
        if ($material->file_path) {
            Storage::disk('public')->delete($material->file_path);
        }
        $material->delete();
        return redirect()->route('lecturer.materials.index')
            ->with('success', 'Materi berhasil dihapus.');
    }
}
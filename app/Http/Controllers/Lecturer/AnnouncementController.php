<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::with('user')->latest()->get();
        return view('lecturer.announcements.index', compact('announcements'));
    }

    public function create()
    {
        return view('lecturer.announcements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'target'  => 'required|in:students',
        ]);

        Announcement::create([
            'user_id'      => auth()->id(),
            'title'        => $request->title,
            'content'      => $request->content,
            'target'       => $request->target,
            'is_published' => true,
        ]);

        return redirect()->route('lecturer.announcements.index')
            ->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    public function edit(Announcement $announcement)
    {
        return view('lecturer.announcements.edit', compact('announcement'));
    }

    public function update(Request $request, Announcement $announcement)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'target'  => 'required|in:students',
        ]);

        $announcement->update([
            'title'        => $request->title,
            'content'      => $request->content,
            'target'       => $request->target,
            'is_published' => $request->is_published ?? true,
        ]);

        return redirect()->route('lecturer.announcements.index')
            ->with('success', 'Pengumuman berhasil diperbarui.');
    }

    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        return redirect()->route('lecturer.announcements.index')
            ->with('success', 'Pengumuman berhasil dihapus.');
    }
}
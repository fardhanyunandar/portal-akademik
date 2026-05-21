<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::with('user')
            ->where('is_published', true)
            ->whereIn('target', ['all', 'students'])
            ->latest()
            ->get();
        return view('student.announcements.index', compact('announcements'));
    }
}
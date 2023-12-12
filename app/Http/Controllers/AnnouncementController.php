<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Club;


class AnnouncementController extends Controller
{
    public function allAnnouncement()
    {

        $announcements = Announcement::with('club')->orderBy('id', 'desc')->get();

        return view('announcement', ['announcements' => $announcements]);
    }

    public function saveAnnouncement(Request $request)
    {

        $clubId= auth()->user()->userId;
       
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $announcementData = array_merge($validatedData, ['clubId' => $clubId]);

        Announcement::create($announcementData);

        return redirect()->back()->with('success', 'Announcement added successfully');
    }
}


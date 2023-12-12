<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Member;
use App\Models\User;

class NotificationController extends Controller
{
    public function notifications()
    {
        $userId = auth()->user()->userId;

        $user = auth()->user();
        $user->notification = null;
        $user->save();

        $joinedClubs = Member::where('userId', $userId)
                             ->where('status', 'joined')
                             ->get();
    
        $notifications = collect(); 
    
        foreach ($joinedClubs as $joinedClub) {
            $clubId = $joinedClub->clubId;
            $clubNotifications = Notification::where('clubId', $clubId)->get();
            $notifications = $notifications->merge($clubNotifications);
        }
    
        return view('notification', ['notifications' => $notifications, 'joinedClubs' => $joinedClubs]);

    }
    public function saveNotification(Request $request)
    {
        $clubId= auth()->user()->userId;
       
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $nData = array_merge($validatedData, ['clubId' => $clubId]);

        Notification::create($nData);

        User::query()->update(['notification' => 'nread']);

        return redirect()->back()->with('success', 'Notification added successfully');
    }
    
}

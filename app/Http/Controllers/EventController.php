<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

    public function eventReq(Request $request)
    {
        $clubId = auth()->user()->userId;
    
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'startDate' => 'required|string',
        ]);

        $validatedData['endDate'] = $validatedData['startDate'];

        $validatedData['clubId'] = $clubId;

        $validatedData['status'] = "pending";

        Event::create($validatedData);

        return redirect()->back()->with('success', 'Event request added successfully');
    }
    public function eventsDisplay()
    {
        $clubId= auth()->user()->userId;

        $eventReqs = Event::where('status', 'pending')->get();

        $allEvent = Event::where('status', 'approved')->get();

        return view('super-admin.requests', ['allEvent' => $allEvent], ['eventReqs' => $eventReqs]);
    }
    
    public function acceptEvent($id)
    {
        Event::where('id', $id)->update(['status' => 'approved']);

        return redirect()->back()->with('success', 'Event accepted');
    }
    public function declineEvent($id)
    {
        Event::where('id', $id)->delete();

        return redirect()->back()->with('success', 'Event request removed');
    }


}

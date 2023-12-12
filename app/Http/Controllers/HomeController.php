<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Post;
use App\Models\User;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        $clubs = Club::inRandomOrder()->limit(3)->get();

        $events = Event::select('id', 'title', 'startDate', 'endDate')->get()->map(function ($event) {
            return [
                'id' => $event->id,
                'title' => $event->title,
                'start' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $event->startDate)->format('Y-m-d\TH:i:s'),
                'end' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $event->endDate)->format('Y-m-d\TH:i:s'),
            ];
        });

        return view('home')->with('clubs', $clubs)->with('events', $events);
    }

    public function adminHome()
    {
        $clubId= auth()->user()->userId;

        $club = Club::where('clubId', $clubId)->first();

        $posts = Post::where('clubId', $clubId)
        ->orderBy('id', 'desc')
        ->get();

        return view('admin.home', ['club' => $club], ['posts' => $posts]);
    }

    public function superAdminHome()
    {
        $members = User::where('role', 'user')->count();
        $requests = Event::where('status', 'pending')->count();
        $clubs = Club::count();

        $allclubs = Club::get();

        return view('super-admin.home', compact('allclubs', 'members', 'clubs', 'requests'));
    }

    public function uploadImage(Request $request)
    {
        $clubId = auth()->user()->userId;
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/images'), $imageName);

        $post = new Post();
        $post->image = $imageName; 
        $post->title = $request->input('title');
        $post->clubId = $clubId;
        $post->save();
    
        return redirect()->back()->with('success', 'Image uploaded successfully');
    }
    
}

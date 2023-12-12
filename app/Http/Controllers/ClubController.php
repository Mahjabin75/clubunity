<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Club;
use App\Models\Post;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class ClubController extends Controller
{
    public function clubDisplay($clubId)
    {
        if(auth()->check()) {
            $userId= auth()->user()->userId;

            $joinedCheck = Member::where('clubId', $clubId)
            ->where('userId', $userId)
            ->value('status');
        }
        else{
            $joinedCheck = "";
        }

        $club = Club::where('clubId', $clubId)->first();

        $posts = Post::where('clubId', $clubId)
        ->orderBy('id', 'desc')
        ->get();

        
        return view('club', [
            'club' => $club,
            'posts' => $posts,
            'joinedCheck' => $joinedCheck
        ]);
    }

    public function searchClubs(Request $request)
    {
        $query = $request->input('query');

        $clubs = Club::where('clubname', 'like', '%' . $query . '%')->get();

        return view('search', ['clubs' => $clubs, 'query' => $query]);
    }

    public function joinReq($clubId)
    {
        $userId = auth()->user()->userId;

        Member::updateOrCreate(
            ['clubId' => $clubId, 'userId' => $userId],
            ['status' => 'pending']
        );

        $clubs = Club::all();

        return redirect()->back()->with('success', 'Join request sent');
    }

    public function leaveReq($clubId)
    {
        $userId = auth()->user()->userId;

        Member::where('clubId', $clubId)
            ->where('userId', $userId)
            ->update(['status' => 'left']);

        return redirect()->back()->with('success', 'Left the club');
    }

    public function removeClub($clubId)
    {
        Club::where('clubId', $clubId)->delete();

        return redirect()->back()->with('success', 'Club removed');
    }
    public function removeMember($id)
    {
        Member::where('id', $id)->delete();

        return redirect()->back()->with('success', 'Member removed');
    }
    public function acceptMember($id)
    {
        Member::where('id', $id)->update(['status' => 'joined']);

        return redirect()->back()->with('success', 'Member accepted');
    }
    public function declineMember($id)
    {
        Member::where('id', $id)->delete();

        return redirect()->back()->with('success', 'Member request removed');
    }

    public function clubMembers()
    {
        $clubId= auth()->user()->userId;

        $memberReqs = Member::where('clubId', $clubId)
                            ->where('status', 'pending')
                             ->get();

        $allMember = Member::where('clubId', $clubId)
                            ->where('status', 'joined')
                            ->get();

        return view('admin.members', ['allMember' => $allMember], ['memberReqs' => $memberReqs]);
    }

    public function updateInfo(Request $request)
    {
        $userId = auth()->user()->userId; 
        $club = Club::where('clubId', $userId)->firstOrFail();
        $club->update([
            'clubname' => $request->input('clubname'),
            'details' => $request->input('details'),
            'location' => $request->input('location'),
            'number' => $request->input('number'),
        ]);

        $user = User::where('userId', $userId)->firstOrFail();
        $user->update([
            'name' => $request->input('leader'),
        ]);
    
        return redirect()->back()->with('success', 'Club information updated successfully');
    }

    public function uploadClubImage(Request $request)
    {
        $clubId = auth()->user()->userId;
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/images'), $imageName);

        $club = Club::where('clubId', $clubId)->firstOrFail();

        $club->clubImage = $imageName;
        $club->save();
    
        return redirect()->back()->with('success', 'Image uploaded successfully');
    }
    public function newClub(Request $request)
    {

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'clubname' => 'required|string|max:255',
            'details' => 'nullable|string',
            'leader' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'number' => 'nullable|string|max:20',
            'email' => 'required|email|max:255|unique:clubs,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $club = new Club();
        $nuser = new User();

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $club->clubImage =  $imageName;
        }
        $newClubId = Str::random(4) . time();

        $club->clubname = $request->input('clubname');
        $club->details = $request->input('details');
        $club->location = $request->input('location');
        $club->number = $request->input('number');
        $club->email = $request->input('email');
        $club->clubId = $newClubId;
        $club->save();

        $nuser->name = $request->input('leader');
        $nuser->role = "admin";
        $nuser->image = "user.jpg";
        $nuser->userId = $newClubId;
        $nuser->email = $request->input('email');
        $nuser->password = Hash::make($request->input('password'));

        $nuser->save();
        
        return redirect()->back()->with('success', 'Club created successfully');
    }

}

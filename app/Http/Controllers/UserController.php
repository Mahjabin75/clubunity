<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function joinedClubs()
    {
        $userId = auth()->user()->userId;

        $joinedClubs = Member::where('userId', $userId)
                ->where('status', 'joined')
                ->with('club')
                ->get();


        return view('joined-club', ['joinedClubs' => $joinedClubs]);
    }

    public function updateName(Request $request)
    {
       
        $request->validate([
            'nname' => 'required|string|max:255',
        ]);

        $user = auth()->user();

        $user->name = $request->nname;
        $user->save();

        return redirect()->back()->with('success', 'Name updated successfully');
    }
    public function updatePassword(Request $request)
    {
        // Validate the request data
        $request->validate([
            'npassword' => 'required|min:8|confirmed',
        ]);

        $user = auth()->user();

        $user->password = Hash::make($request->npassword);
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully');
    }
}

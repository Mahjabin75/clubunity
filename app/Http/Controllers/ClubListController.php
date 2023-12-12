<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Club;

class ClubListController extends Controller
{
    public function clublist()
    {
        $clubs = Club::all();

        return view('clublist')->with('clubs', $clubs); 
    }
}

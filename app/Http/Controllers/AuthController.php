<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User; 

class AuthController extends Controller
{
    function login()
    {
        return view('login'); 
    }
    function loginSubmit(Request $request){
        $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ]);

        $reqValues = $request->only('email', 'password');
        if(Auth::attempt($reqValues)){
            $user = Auth::user();
            
            if ($user->role === 'admin') {
                return redirect()->intended(route('admin/home'))->with("success", "Logged In as Admin");
            } elseif ($user->role === 'superadmin') {
                return redirect()->intended(route('super-admin/home'))->with("success", "Logged In as Super Admin");
            } else {
                return redirect()->intended(route('home'))->with("success", "Logged In");
            }
        } else {
            return redirect(route('login'))->with("error", "Email or Password is invalid");
        }
    }

    public function regSubmit(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'id'=> 'required|unique:users,id',
            'password'=> 'required|min:8|confirmed'
        ]);

        
        $user = new User();
        $user->role = "user";
        $user->image = "user.jpg";
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->userId = $request->input('id');
        $user->password = bcrypt($request->input('password')); 

        $user->save(); 
        
        return redirect()->route('login')->with('success', 'Registration successful!'); 
    }

    function logout()
    {
        Auth::logout();
        return redirect(route('home')); 
    }
}

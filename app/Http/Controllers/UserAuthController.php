<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Suppoort\Requuest\password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserAuthController extends Controller
{
    public function login(){
        return view("login");
    }

    public function loginAuth(Request $request)
    {
        // dd($request->all());
        //authenticate
        $credentials = $request->only('email', 'password');
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $request -> session() -> regenerate();

            if (auth()->user()->role == 'admin') {
                return redirect()->route('dashboard');
            } elseif (auth()->user()->role == 'student') {
                return redirect()->route('student_dashboard');
            }
            elseif (auth()->user()->role == 'teacher'){
                return redirect()->route('teacher_dashboard');
           }

        }
        return back()->withErrors([
            'email' => 'Invalid Credentials.',
        ]);
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login_page')->with('success', 'Logout Successful.');
  
    } 
    public function registion()
    {
        return view("register");
    }
    public function registerAuth(Request $request)
    {
        // dd($request->all());
        User::create([
            'name'=>$request->firstname .' '. $request->lasttname,
            'role'=>$request->user_type,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        return redirect()->route('login_page')->with('success', 'User Registration Successful.');
    }
}


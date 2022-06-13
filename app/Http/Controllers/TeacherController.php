<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function teacherDashboard()
    {

        return view('teacher.dashboard');
    }
    public function routineDashboard()
    {

        return view('teacher.routine');
    }
    
    public function updateprofileDashboard()
    {
        $userDate = User::find(auth()->user()->id);
        $teacherData = Teacher::where('user_id', $userDate->id)->first();
        // dd($teacherData);
        return view('teacher.updateprofile', compact('userDate', 'teacherData'));
    }

    public function updateTeacherData(Request $request)
    {
        $request->validate([
            'email' => 'email|unique:users,email,' . auth()->user()->id,
        ]);
        $userDate = User::find(auth()->user()->id);
        $userDate->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        $teacherData = Teacher::where('user_id', $userDate->id)->first();
        if ($teacherData) {
            $teacherData->update([
                'contact_no' => $request->contact_no,
                'address' => $request->address,
                'designation' => $request->designation,
                
            ]);
        } else {
            $newTeacher = Teacher::create([
                'status'=>1,
                'user_id' => $userDate->id,
                'contact_no' => $request->contact_no,
                'address' => $request->address,
                'designation' => $request->designation,
            ]);
        }
        // dd($request->all());
        return redirect()->back()->with('success', 'Updated successfully');
    }
   
}

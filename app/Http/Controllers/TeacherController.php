<?php

namespace App\Http\Controllers;
use App\Models\Teacher;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function teacherDashboard()    {
        
        return view('teacher.dashboard');
    }
    public function updateprofileDashboard(Request $request)    {
        
      return view('teacher.updateprofile');
    
      
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $newTeacher = Teacher::create([
            'email' => $request->email,
            'subject_id' => $request->subject_id,
            'joining' => $request->joining,
            'designation' => $request->designation,
            'date-of-birth' => $request->date_of_birth,
            'contact_no' => $request->contact_no,
            'address' => $request->address,
            'pro_pic' => $request->pro_pic,
            
            
        ]);
        return redirect()->back()->with('success', 'Successfully added.');
    }
}

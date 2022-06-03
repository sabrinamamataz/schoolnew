<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;

class StudentController extends Controller
{
    public function studentDashboard()
    {

        return view('student.dashboard');
    }
    public function updateprofileDashboard()
    {
        $userDate = User::find(auth()->user()->id);
        $studentData = Student::where('user_id', $userDate->id)->first();
        // dd($studentData);
        return view('student.updateprofile', compact('userDate', 'studentData'));
    }

    public function updateStudentData(Request $request)
    {
        $request->validate([
            'email' => 'email|unique:users,email,' . auth()->user()->id,
        ]);
        $userDate = User::find(auth()->user()->id);
        $userDate->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        $studentData = Student::where('user_id', $userDate->id)->first();
        if ($studentData) {
            $studentData->update([
                'gaurdian_no' => $request->gaurdian_no,
                'class' => $request->class,
                'adress' => $request->adress,
                'gaurdian_name' => $request->gaurdian_name,
                'gaurdian_relation' => $request->gaurdian_relation,
            ]);
        } else {
            $newStudent = Student::create([
                'status'=>1,
                'user_id' => $userDate->id,
                'gaurdian_no' => $request->gaurdian_no,
                'class' => $request->class,
                'adress' => $request->adress,
                'gaurdian_name' => $request->gaurdian_name,
                'gaurdian_relation' => $request->gaurdian_relation,
            ]);
        }
        // dd($request->all());
        return redirect()->back()->with('success', 'Updated successfully');
    }
}

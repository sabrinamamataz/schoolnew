<?php

namespace App\Http\Controllers;

use App\Models\Routine;

use Illuminate\Http\Request;

class TroutineController extends Controller
{
    public function routineDashboard()
    {
        $troutines = Routine::groupBy('teacher_id')->pluck('teacher_id', 'teacher_id');

        // dd($troutines);

        
        $sections = Section::all();
        $periods = ClsPeriod::all();
        $subjects = Subject::where('status', 1)->get();
        $teachers = User::where('role', 'teacher')->get();
        return view('teacher.routine', compact('routines', 'sections', 'subjects', 'periods', 'teachers'));
            

    }
    
}

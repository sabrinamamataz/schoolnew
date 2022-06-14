<?php

namespace App\Http\Controllers;

use App\Models\Routine;
use App\Models\Teacher;

use Illuminate\Http\Request;

class TroutineController extends Controller
{
    public function routineDashboard()
    {
        $routines = Routine::groupBy('teacher_id')->pluck('teacher_id', 'teacher_id');

        // dd($routines);

        
        $sections = Section::all();
        $periods = ClsPeriod::all();
        $subjects = Subject::where('status', 1)->get();
        $teachers = User::where('role', 'teacher')->get();
        return view('teacher.routine', compact('routines', 'sections', 'subjects', 'periods', 'teachers'));
            

    }
    
}

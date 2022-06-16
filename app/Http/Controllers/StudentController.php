<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ClsPeriod;
use App\Models\Routine;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Teacher;

class StudentController extends Controller
{
    public function studentDashboard()
    {

        return view('student.dashboard');
    }
    public function routineDashboard()
    {
        $routines = Routine::groupBy('section_id')->pluck('section_id', 'section_id');

        // dd($routines);

        $sections = Section::all();
        $periods = ClsPeriod::all();
        $subjects = Subject::where('status', 1)->get();
        $teachers = User::where('role', 'teacher')->get();
        return view('student.routine', compact('routines', 'sections', 'subjects', 'periods', 'teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        // $newRoutine = Routine::create([
        //     'section_id' => $request->section_id,
        //     'week_day' => $request->week_day,
        //     'subject_id' => $request->subject_id,
        //     'period_id' => $request->period_id,
        // ]);
        $check = Routine::where('section_id', $request->section_id)->first();
        if ($check) {
            return redirect()->back()->with('error', 'Already exists.');
        }
        $weeks = ["Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday"];
        // dd(($weeks));
        for ($i = 0; $i < 6; $i++) {
            $newRoutine = Routine::create([
                'section_id' => $request->section_id,
                'week_day' => $weeks[$i],
            ]);
        }
        return redirect()->back()->with('success', 'Successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function show(Routine $routine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function edit(Routine $routine)
    {
        // $routine = Routine($id)
        // returen view('routine.edit' ,['routine'=>$routine])

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Routine  $routine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $routine = Routine::find($request->routine_id);
        $routine->update([
            'section_id' => $request->section_id,
            'week_day' => $request->week_day,
            'subject_name' => $request->subject_name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'period' => $request->period,
        ]);
        return redirect()->back()->with('success', 'Successfully updated.');
    }

    public function periodPage()
    {
        $periods = ClsPeriod::all();
        return view('student.period', compact('periods'));
    }

    public function addPeriod(Request $request)
    {
        $check = ClsPeriod::where('period', $request->period)->first();
        if ($check) {
            return redirect()->back()->with('error', 'Already exists.');
        }
        $newRoutine = ClsPeriod::create([
            'period' => $request->period,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);
        return redirect()->back()->with('success', 'Successfully added.');
    }

    public function updateWeekDay(Request $request)
    {
        $routine = Routine::find($request->routine_id);
        if (!$routine) {
            return redirect()->back()->with('error', 'Invalid request.');
        }
        $routine->update([
            "period_1_sub_id" => $request->period_1_sub_id,
            "period_1_t_id" => $request->period_1_t_id,

            "period_2_sub_id" => $request->period_2_sub_id,
            "period_2_t_id" => $request->period_2_t_id,

            "period_3_sub_id" => $request->period_3_sub_id,
            "period_3_t_id" => $request->period_3_t_id,

            "period_4_sub_id" => $request->period_4_sub_id,
            "period_4_t_id" => $request->period_4_t_id,

            "period_5_sub_id" => $request->period_5_sub_id,
            "period_5_t_id" => $request->period_5_t_id,

            "period_6_sub_id" => $request->period_6_sub_id,
            "period_6_t_id" => $request->period_6_t_id,

            "period_7_sub_id" => $request->period_7_sub_id,
            "period_7_t_id" => $request->period_7_t_id,

            "period_8_sub_id" => $request->period_8_sub_id,
            "period_8_t_id" => $request->period_8_t_id
        ]);
        return redirect()->back()->with('success', 'Successfully added.');
    
        
    }
    public function routineList()
    {
        $routineDetails = Routine::find($id);
        return view('routine.invoice', compact('routineDetails'));
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
                'guardian_no' => $request->guardian_no,
                'class' => $request->class,
                'address' => $request->address,
                'guardian_name' => $request->guardian_name,
                'guardian_relation' => $request->guardian_relation,
            ]);
        } else {
            $newStudent = Student::create([
                'status'=>1,
                'user_id' => $userDate->id,
                'guardian_no' => $request->guardian_no,
                'class' => $request->class,
                'address' => $request->address,
                'guardian_name' => $request->guardian_name,
                'guardian_relation' => $request->guardian_relation,
            ]);
        }
        // dd($request->all());
        return redirect()->back()->with('success', 'Updated successfully');
    }
}

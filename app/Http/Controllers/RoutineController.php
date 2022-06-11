<?php

namespace App\Http\Controllers;

use App\Models\ClsPeriod;
use App\Models\Routine;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class RoutineController extends Controller
{
    public function routineDashboard()
    {
        $routines = Routine::groupBy('section_id')->pluck('section_id', 'section_id');

        // dd($routines);

        $sections = Section::all();
        $periods = ClsPeriod::all();
        $subjects = Subject::where('status', 1)->get();
        $teachers = User::where('role', 'teacher')->get();
        return view('admin.routine', compact('routines', 'sections', 'subjects', 'periods', 'teachers'));
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
        return view('admin.period', compact('periods'));
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
}

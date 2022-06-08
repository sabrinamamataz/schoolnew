<?php

namespace App\Http\Controllers;

use App\Models\Routine;
use Illuminate\Http\Request;

class RoutineController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }
    public function routineDashboard()
    {
        $routines = Routine::all();
        return view('admin.routine', compact('routines'));
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
        $newRoutine = Routine::create([
            'section_id' => $request->section_id,
            'week_day' => $request->week_day,
            'subject_name' => $request->subject_name,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'period' => $request->period,
            
        ]);
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

}
                                        
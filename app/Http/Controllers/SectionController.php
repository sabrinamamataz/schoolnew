<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    public function adminDashboard()
    {
        return view('admin.dashboard');
    }
    public function sectionDashboard()
    {
        $sections = Section::all();
        return view('admin.section', compact('sections'));
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
        $newSection = Section::create([
            'class_id' => $request->class_id,
            'section' => $request->section,
            'student_capasity' => $request->student_capacity,
            'shift' => $request->shift,
            'teacher_id' => $request->teacher_id,
            'status' => $request->status,
            'status' => 1
        ]);
        return redirect()->back()->with('success', 'Successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        // $section = Section($id)
        // returen view('section.edit' ,['section'=>$section])

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $section = Section::find($request->section_id);
        $section->update([
            'class_id' => $request->class_id,
            'section' => $request->section,
            'student_capasity' => $request->student_capacity,
            'shift' => $request->shift,
            'teacher_id' => $request->teacher_id,
            'status' => $request->status,
        ]);
        return redirect()->back()->with('success', 'Successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Section::find($id)->delete();
        return redirect()->back()->with('success', 'Successfully deleted.');
    }
}

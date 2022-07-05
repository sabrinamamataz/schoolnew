<?php

namespace App\Http\Controllers;

use App\Models\Stclass;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }
    public function classDashboard()
    {
        $stclasss = Stclass::all();
        return view('admin.class', compact('stclasss'));
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
        $newStclass = Stclass::create([
            'class_name' => $request->class_name,
            'capacity' => 0,
            'status' => 1
        ]);
        return redirect()->back()->with('success', 'Successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Class  $class
     * @return \Illuminate\Http\Response
     */
    public function show(Stclass $stclass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Section  $class
     * @return \Illuminate\Http\Response
     */
    public function edit(Stclass $stclass)
    {
        // $class = Class($id)
        // returen view('class.edit' ,['class'=>$class])

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Class  $class
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $stclass = Stclass::find($request->class_id);
        $stclass->update([
            'Class_name' => $request->Class_name,
            'capacity' => $request->capacity,
        ]);
        return redirect()->back()->with('success', 'Successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Class  $class
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Stclass::find($id)->delete();
        return redirect()->back()->with('success', 'Successfully deleted.');
    }
}

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

    public function store(Request $request)
    {
        Stclass::create([
            'class_name' => $request->class_name,
            'capacity' => $request->capacity,
            'status' => 1
        ]);
        return redirect()->back()->with('success', 'Successfully added.');
    }

    public function update(Request $request)
    {
        $stclass = Stclass::find($request->class_id);
        $stclass->update([
            'Class_name' => $request->Class_name,
            'capacity' => $request->capacity,
        ]);
        return redirect()->back()->with('success', 'Successfully updated.');
    }
}

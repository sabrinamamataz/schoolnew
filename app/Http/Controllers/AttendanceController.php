<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function adminDashboard()
    {

        return view('admin.dashboard');
    }
    public function attendanceDashboard()
    {

        $attendances = Attendance::all();
        return view('admin.attendance', compact('attendances'));
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
        $newAttendance = Attendances::create([
            'section_id' => $request->section_id,
            'capacity' => $request->capacity,
            'status' => 1
        ]);
        return redirect()->back()->with('success', 'Successfully added.');
    
}
}

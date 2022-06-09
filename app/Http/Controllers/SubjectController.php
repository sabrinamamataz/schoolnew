<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function subjectList()
    {
        $subjects = Subject::all();
        return view('admin.subject', compact('subjects'));
    }

    public function addSubject(Request $request)
    {
        $newSubject = Subject::create([
            'subject_name' => $request->subject_name,
            'credit' => $request->credit,
            'passing_mark' => $request->passing_mark,
            'status' => 1
        ]);

        return redirect()->back()->with('success', 'Successfully added.');
    }
}

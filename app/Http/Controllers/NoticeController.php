<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use App\Models\User;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function adminDashboard()
    {

        return view('admin.dashboard');
    }
    public function noticeDashboard()
    {
        $notices = Notice::all();
        return view('admin.notice', compact('notices'));
    }

    public function store(Request $request)
    {
        $newNotice = Notice::create([
            'title' => $request->title,
            'details' => $request->details,
            'date' => $request->date,
        ]);
        return redirect()->back()->with('success', 'Successfully added.');
    }


    public function update(Request $request)
    {
        $notice = Notice::find($request->notice_id);
        $notice->update([
            'title' => $request->title,
            'details' => $request->details,
            'date' => $request->date,
        ]);
        return redirect()->back()->with('success', 'Successfully updated.');
    }

    public function destroy($id)
    {
        Notice::find($id)->delete();
        return redirect()->back()->with('success', 'Successfully deleted.');
    }

    public function studentNoticeDashboard()
    {
        $notices = Notice::orderBy('id', 'desc')->paginate(5);
        return view('student.notice', compact('notices'));
    }

    public function teacherNoticeDashboard()
    {
        $notices = Notice::all();
        return view('teacher.notice', compact('notices'));
    }
}

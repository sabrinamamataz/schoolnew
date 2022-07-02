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
        $newNotice = Notice::create([
            'details' => $request->details,
            'date' => $request->date,
            
            
        ]);
        return redirect()->back()->with('success', 'Successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        // $notice = Notice($id)
        // returen view('notice.edit' ,['notice'=>$notice])

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $notice = Notice::find($request->notice_id);
        $notice->update([
            'details' => $request->details,
            'date' => $request->date,
        ]);
        return redirect()->back()->with('success', 'Successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notice  $noticen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Notice::find($id)->delete();
        return redirect()->back()->with('success', 'Successfully deleted.');
    }
    public function studentNoticeDashboard()
    {
        return view('student.notice');

}
public function teacherNoticeDashboard()
    {
        return view('teacher.notice');

}
}

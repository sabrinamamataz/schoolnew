<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Section;
use App\Models\ClsPeriod;
use App\Models\Routine;
use App\Models\Subject;

class TeacherController extends Controller
{
    public function teacherDashboard()
    {

        return view('teacher.dashboard');
    }

    public function weekDay($week_name)
    {
        $week_day = 0;
        if ($week_name == 'Saturday') {
            $week_day = 1;
        } elseif ($week_name == 'Sunday') {
            $week_day = 2;
        } elseif ($week_name == 'Monday') {
            $week_day = 3;
        } elseif ($week_name == 'Tuesday') {
            $week_day = 4;
        } elseif ($week_name == 'Wednesday') {
            $week_day = 5;
        } elseif ($week_name == 'Thursday') {
            $week_day = 6;
        }
        return $week_day;
    }

    public function routineDashboard()
    {
        $arr = [];
        $i = 0;
        $p1R = Routine::where('period_1_t_id', auth()->user()->id)->get();
        foreach ($p1R as $data) {
            $arr[$i]['day_no'] = $this->weekDay($data->week_day);
            $arr[$i]['week_day'] = $data->week_day;
            $arr[$i]['period'] = ClsPeriod::getStartEndTime(1)['period'];
            $arr[$i]['subject'] = Subject::getSubjectName($data->period_1_sub_id);
            $arr[$i]['cls_sec'] = Section::getSectionAndCls($data->section_id);
            $arr[$i]['start_time'] = ClsPeriod::getStartEndTime(1)['start'];
            $arr[$i]['end_time'] = ClsPeriod::getStartEndTime(1)['end'];
            $i++;
        }

        $p2R = Routine::where('period_2_t_id', auth()->user()->id)->get();
        foreach ($p2R as $data) {
            $arr[$i]['day_no'] = $this->weekDay($data->week_day);
            $arr[$i]['week_day'] = $data->week_day;
            $arr[$i]['period'] = ClsPeriod::getStartEndTime(2)['period'];
            $arr[$i]['subject'] = Subject::getSubjectName($data->period_2_sub_id);
            $arr[$i]['cls_sec'] = Section::getSectionAndCls($data->section_id);
            $arr[$i]['start_time'] = ClsPeriod::getStartEndTime(2)['start'];
            $arr[$i]['end_time'] = ClsPeriod::getStartEndTime(2)['end'];
            $i++;
        }

        $p3R = Routine::where('period_3_t_id', auth()->user()->id)->get();
        foreach ($p3R as $data) {
            $arr[$i]['day_no'] = $this->weekDay($data->week_day);
            $arr[$i]['week_day'] = $data->week_day;
            $arr[$i]['period'] = ClsPeriod::getStartEndTime(3)['period'];
            $arr[$i]['subject'] = Subject::getSubjectName($data->period_3_sub_id);
            $arr[$i]['cls_sec'] = Section::getSectionAndCls($data->section_id);
            $arr[$i]['start_time'] = ClsPeriod::getStartEndTime(3)['start'];
            $arr[$i]['end_time'] = ClsPeriod::getStartEndTime(3)['end'];
            $i++;
        }

        $p4R = Routine::where('period_4_t_id', auth()->user()->id)->get();
        foreach ($p4R as $data) {
            $arr[$i]['day_no'] = $this->weekDay($data->week_day);
            $arr[$i]['week_day'] = $data->week_day;
            $arr[$i]['period'] = ClsPeriod::getStartEndTime(4)['period'];
            $arr[$i]['subject'] = Subject::getSubjectName($data->period_4_sub_id);
            $arr[$i]['cls_sec'] = Section::getSectionAndCls($data->section_id);
            $arr[$i]['start_time'] = ClsPeriod::getStartEndTime(4)['start'];
            $arr[$i]['end_time'] = ClsPeriod::getStartEndTime(4)['end'];
            $i++;
        }

        $p5R = Routine::where('period_5_t_id', auth()->user()->id)->get();
        foreach ($p5R as $data) {
            $arr[$i]['day_no'] = $this->weekDay($data->week_day);
            $arr[$i]['week_day'] = $data->week_day;
            $arr[$i]['period'] = ClsPeriod::getStartEndTime(5)['period'];
            $arr[$i]['subject'] = Subject::getSubjectName($data->period_5_sub_id);
            $arr[$i]['cls_sec'] = Section::getSectionAndCls($data->section_id);
            $arr[$i]['start_time'] = ClsPeriod::getStartEndTime(5)['start'];
            $arr[$i]['end_time'] = ClsPeriod::getStartEndTime(5)['end'];
            $i++;
        }

        $p6R = Routine::where('period_6_t_id', auth()->user()->id)->get();
        foreach ($p6R as $data) {
            $arr[$i]['day_no'] = $this->weekDay($data->week_day);
            $arr[$i]['week_day'] = $data->week_day;
            $arr[$i]['period'] = ClsPeriod::getStartEndTime(6)['period'];
            $arr[$i]['subject'] = Subject::getSubjectName($data->period_6_sub_id);
            $arr[$i]['cls_sec'] = Section::getSectionAndCls($data->section_id);
            $arr[$i]['start_time'] = ClsPeriod::getStartEndTime(6)['start'];
            $arr[$i]['end_time'] = ClsPeriod::getStartEndTime(6)['end'];
            $i++;
        }

        $p7R = Routine::where('period_7_t_id', auth()->user()->id)->get();
        foreach ($p7R as $data) {
            $arr[$i]['day_no'] = $this->weekDay($data->week_day);
            $arr[$i]['week_day'] = $data->week_day;
            $arr[$i]['period'] = ClsPeriod::getStartEndTime(7)['period'];
            $arr[$i]['subject'] = Subject::getSubjectName($data->period_7_sub_id);
            $arr[$i]['cls_sec'] = Section::getSectionAndCls($data->section_id);
            $arr[$i]['start_time'] = ClsPeriod::getStartEndTime(7)['start'];
            $arr[$i]['end_time'] = ClsPeriod::getStartEndTime(7)['end'];
            $i++;
        }

        $p8R = Routine::where('period_8_t_id', auth()->user()->id)->get();
        foreach ($p1R as $data) {
            $arr[$i]['day_no'] = $this->weekDay($data->week_day);
            $arr[$i]['week_day'] = $data->week_day;
            $arr[$i]['period'] = ClsPeriod::getStartEndTime(8)['period'];
            $arr[$i]['subject'] = Subject::getSubjectName($data->period_8_sub_id);
            $arr[$i]['cls_sec'] = Section::getSectionAndCls($data->section_id);
            $arr[$i]['start_time'] = ClsPeriod::getStartEndTime(8)['start'];
            $arr[$i]['end_time'] = ClsPeriod::getStartEndTime(8)['end'];
            $i++;
        }
        // sorting
        $columns = array_column($arr, 'day_no');
        $columns2 = array_column($arr, 'period');
        array_multisort($columns, SORT_ASC, $columns2, SORT_ASC,  $arr);
        // dd($arr);

        return view('teacher.routine', compact('arr'));
    }
    public function updateprofileDashboard()
    {
        $userDate = User::find(auth()->user()->id);
        $teacherData = Teacher::where('user_id', $userDate->id)->first();
        // dd($teacherData);
        return view('teacher.updateprofile', compact('userDate', 'teacherData'));
    }

    public function updateTeacherData(Request $request)
    {
        $request->validate([
            'email' => 'email|unique:users,email,' . auth()->user()->id,
        ]);
        $userDate = User::find(auth()->user()->id);
        $userDate->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        $teacherData = Teacher::where('user_id', $userDate->id)->first();
        if ($teacherData) {
            $teacherData->update([
                'contact_no' => $request->contact_no,
                'address' => $request->address,
                'designation' => $request->designation,

            ]);
        } else {
            $newTeacher = Teacher::create([
                'status' => 1,
                'user_id' => $userDate->id,
                'contact_no' => $request->contact_no,
                'address' => $request->address,
                'designation' => $request->designation,
            ]);
        }
        // dd($request->all());
        return redirect()->back()->with('success', 'Updated successfully');
    }
}

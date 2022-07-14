<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Section;
use App\Models\ClsPeriod;
use App\Models\Routine;
use App\Models\Stclass;
use App\Models\StudyMaterial;
use App\Models\Subject;
use Carbon\Carbon;
use Faker\Factory as Faker;

class TeacherController extends Controller
{
    public function teacherDashboard()
    {
        $arr = $this->generateTeacherRoutine();

        $new_arr = array_filter($arr, function ($var) {
            $weekMap = [
                0 => 'Sunday',
                1 => 'Monday',
                2 => 'Tuesday',
                3 => 'Wednesday',
                4 => 'Thursday',
                5 => 'Friday',
                6 => 'Saturday',
            ];
            $dayOfTheWeek = Carbon::now()->dayOfWeek;
            $weekday = $weekMap[$dayOfTheWeek];

            return ($var['week_day'] == $weekday);
        });

        $section_info = Section::where('teacher_id', auth()->user()->id)->first();
        return view('teacher.dashboard', compact('section_info', 'new_arr'));
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

    public function generateTeacherRoutine()
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

        return $arr;
    }

    public function routineDashboard()
    {
        $arr = $this->generateTeacherRoutine();
        return view('teacher.routine', compact('arr'));
    }
    public function teacherProfile()
    {
        $userData = User::find(auth()->user()->id);
        $teacherData = Teacher::where('user_id', $userData->id)->first();
        $subjects = Subject::all();
        $faker = Faker::create();

        return view('teacher.updateprofile', compact('userData', 'teacherData', 'subjects'));
    }

    public function updateTeacherData(Request $request)
    {
        $request->validate([
            'email' => 'email|unique:users,email,' . auth()->user()->id,
        ]);
        $userData = User::find(auth()->user()->id);
        $userData->update([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
        ]);
        $teacherData = Teacher::where('user_id', $userData->id)->first();
        if ($teacherData) {
            $teacherData->update([
                'contact_no' => $request->contact_no,
                'address' => $request->address,
                'designation' => $request->designation,
                'subject_id' => $request->subject_id,
                'date_of_birth' => $request->date_of_birth,
            ]);
        } else {
            $newTeacher = Teacher::create([
                'status' => 1,
                'user_id' => $userData->id,
                'contact_no' => $request->contact_no,
                'address' => $request->address,
                'designation' => $request->designation,
                'subject_id' => $request->subject_id,
                'date_of_birth' => $request->date_of_birth,
            ]);
        }

        return redirect()->back()->with('success', 'Updated successfully');
    }

    public function attendancePage($class_id)
    {
        $classes = Stclass::all();
        $periods = ClsPeriod::all();
        if ($class_id == 0) {
            $attendances = Attendance::where('teacher_id', auth()->user()->id)->get();
        } else {
            $attendances = Attendance::join('sections', 'sections.id', 'attendances.section_id')
                ->where('attendances.teacher_id', auth()->user()->id)
                ->where('sections.class_id', $class_id)
                ->get();
        }
        return view('teacher.attendance', compact('periods', 'attendances', 'classes', 'class_id'));
    }

    public function studyMaterialPage()
    {
        $studymaterials = Studymaterial::where('teacher_id', auth()->id())->get();
        $section_ids = Routine::where('period_1_t_id', auth()->id())
            ->orWhere('period_1_t_id', auth()->id())
            ->orWhere('period_2_t_id', auth()->id())
            ->orWhere('period_3_t_id', auth()->id())
            ->orWhere('period_4_t_id', auth()->id())
            ->orWhere('period_5_t_id', auth()->id())
            ->orWhere('period_6_t_id', auth()->id())
            ->orWhere('period_7_t_id', auth()->id())
            ->orWhere('period_8_t_id', auth()->id())
            ->pluck('section_id');

        if (count($section_ids) > 0) {
            $sections = Section::whereIn('id', $section_ids)->get();
        } else {
            $sections = [];
        }

        return view('teacher.study-material', compact('studymaterials', 'sections'));
    }
}

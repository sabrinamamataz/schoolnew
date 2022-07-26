<?php

namespace App\Http\Controllers;

use App\Models\AttendanceDetails;
use App\Models\AttendanceRecord;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ClsPeriod;
use App\Models\Stclass;
use App\Models\Routine;
use App\Models\Section;
use App\Models\Student;
use App\Models\StudentAssignSection;
use Carbon\Carbon;

class StudentController extends Controller
{
    public function studentDashboard()
    {
        if (auth()->user()->userToSecAssign) {
            $section_id = auth()->user()->userToSecAssign->assignSectionToSection->id;
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

            $routine = Routine::where('section_id', $section_id)->where('week_day', $weekday)->first();
        } else {
            $routine = null;
        }
        return view('student.dashboard', compact('routine'));
    }

    public function routineDashboard()
    {
        $periods = ClsPeriod::all();

        $clsSec = StudentAssignSection::where('user_id', auth()->user()->id)->latest()->first();
        if ($clsSec) {
            $section = Section::find($clsSec->section_id);
        } else {
            $section = '';
        }

        if (isset($section->class_id)) {
            $routine = $section->class_id;
        } else {
            $routine = 0;
        }
        $routine = 1;

        return view('student.routine', compact('routine', 'periods', 'section'));
    }

    public function store(Request $request)
    {
        $check = Routine::where('section_id', $request->section_id)->first();
        if ($check) {
            return redirect()->back()->with('error', 'Already exists.');
        }
        $weeks = ["Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday"];

        for ($i = 0; $i < 6; $i++) {
            $newRoutine = Routine::create([
                'section_id' => $request->section_id,
                'week_day' => $weeks[$i],
            ]);
        }
        return redirect()->back()->with('success', 'Successfully added.');
    }

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
            'class' => $request->class,
        ]);
        return redirect()->back()->with('success', 'Successfully updated.');
    }

    public function periodPage()
    {
        $periods = ClsPeriod::all();
        return view('student.period', compact('periods'));
    }
    public function classPage()
    {
        $classes = Student::all();
        return view('student.class', compact('classes'));
    }

    public function addPeriod(Request $request)
    {
        $check = ClsPeriod::where('period', $request->period)->first();
        if ($check) {
            return redirect()->back()->with('error', 'Already exists.');
        }
        $newRoutine = ClsPeriod::create([
            'period' => $request->period,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);
        return redirect()->back()->with('success', 'Successfully added.');
    }

    public function addClass(Request $request)
    {
        $check = Student::where('class', $request->class)->first();
        if ($check) {
            return redirect()->back()->with('error', 'Already exists.');
        }
        $newRoutine = Student::create([
            'class' => $request->class,
        ]);

        return redirect()->back()->with('success', 'Successfully added.');
    }

    public function updateWeekDay(Request $request)
    {
        $routine = Routine::find($request->routine_id);
        if (!$routine) {
            return redirect()->back()->with('error', 'Invalid request.');
        }
        $routine->update([
            "period_1_sub_id" => $request->period_1_sub_id,
            "period_1_t_id" => $request->period_1_t_id,

            "period_2_sub_id" => $request->period_2_sub_id,
            "period_2_t_id" => $request->period_2_t_id,

            "period_3_sub_id" => $request->period_3_sub_id,
            "period_3_t_id" => $request->period_3_t_id,

            "period_4_sub_id" => $request->period_4_sub_id,
            "period_4_t_id" => $request->period_4_t_id,

            "period_5_sub_id" => $request->period_5_sub_id,
            "period_5_t_id" => $request->period_5_t_id,

            "period_6_sub_id" => $request->period_6_sub_id,
            "period_6_t_id" => $request->period_6_t_id,

            "period_7_sub_id" => $request->period_7_sub_id,
            "period_7_t_id" => $request->period_7_t_id,

            "period_8_sub_id" => $request->period_8_sub_id,
            "period_8_t_id" => $request->period_8_t_id
        ]);

        return redirect()->back()->with('success', 'Successfully added.');
    }

    public function studentProfile()
    {
        $userData = User::find(auth()->user()->id);
        $studentData = Student::where('user_id', $userData->id)->first();
        $classes = Stclass::all();

        return view('student.updateprofile', compact('userData', 'studentData', 'classes'));
    }

    public function updateStudentData(Request $request)
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
        $studentData = Student::where('user_id', $userData->id)->first();
        if ($studentData) {
            $studentData->update([
                'guardian_no' => $request->guardian_no,
                'address' => $request->address,
                'date_of_birth' => $request->date_of_birth,
                'age' => $request->age,
                'guardian_name' => $request->guardian_name,
                'guardian_relation' => $request->guardian_relation,
            ]);
            if ($request->class) {
                $studentData->update([
                    'class' => $request->class,
                ]);
            }
        } else {
            $newStudent = Student::create([
                'status' => 1,
                'user_id' => $userData->id,
                'guardian_no' => $request->guardian_no,
                'address' => $request->address,
                'date_of_birth' => $request->date_of_birth,
                'age' => $request->age,
                'class' => $request->class,
                'guardian_name' => $request->guardian_name,
                'guardian_relation' => $request->guardian_relation,
            ]);
        }

        return redirect()->back()->with('success', 'Updated successfully');
    }

    public function studentAttendance()
    {
        $attendances = AttendanceDetails::where('s_user_id', auth()->user()->id)
            ->whereMonth('created_at', date('m'))
            ->get();
        $total = $attendances->count();
        $present = $attendances->where('present', 1)->count();
        $absent = $total - $present;

        $attendanceRecord = AttendanceRecord::where('s_user_id', auth()->user()->id)
            ->where('month', date('m'))
            ->where('year', date('Y'))
            ->first();

        if ($attendanceRecord) {
            $attendanceRecord->update([
                'total_class' => $total,
                'present' => $present,
                'absent' => $absent
            ]);
        } else {
            if (auth()->user()->userToSecAssign) {
                $newAttendanceRecord = AttendanceRecord::create([
                    's_user_id' => auth()->user()->id,
                    'class_id' => auth()->user()->userToSecAssign->assignSectionToSection->class_id,
                    'section_id' => auth()->user()->userToSecAssign->section_id,
                    'month' => date('m'),
                    'year' => date('Y'),
                    'first_class' => Carbon::now()->startOfMonth(),
                    'last_class' => Carbon::now()->endOfMonth(),
                    'total_class' => $total,
                    'present' => $present,
                    'absent' => $absent
                ]);
            }
        }

        $getRecord = AttendanceRecord::where('s_user_id', auth()->user()->id)->get();

        return view('student.attendance', compact('getRecord'));
    }
}

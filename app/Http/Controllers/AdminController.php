<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Attendance;
use App\Models\AttendanceDetails;
use App\Models\StudentAssignSection;
use App\Models\ClsPeriod;
use App\Models\Routine;
use App\Models\Stclass;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\UserDetails;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function studentList($class_id)
    {
        $classes = Stclass::all();
        if ($class_id == 0) {
            $students = User::join('students', 'students.user_id', 'users.id')
                ->select('students.*', 'users.name', 'users.name', 'users.email', 'users.gender', 'users.role')
                ->where('users.role', 'student')
                ->get();
        } else {
            $students = User::join('students', 'students.user_id', 'users.id')
                ->select('students.*', 'users.name', 'users.name', 'users.email', 'users.gender', 'users.role')
                ->where('users.role', 'student')
                ->where('students.class', $class_id)
                ->get();
        }

        return view('admin.student-list', compact('students', 'classes', 'class_id'));
    }

    public function updateStudentList(Request $request)
    {
        $request->validate([
            'email' => 'email|unique:users,email,' . $request->user_id,
        ]);

        $userData = User::find($request->user_id);
        $userData->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        $student = Student::where('user_id', $request->user_id)->first();
        $student->update([
            'guardian_no' => $request->guardian_no,
            'class' => $request->class_id,
            'address' => $request->address,
            'date_of_birth' => $request->date_of_birth,
            'age' => $request->age,
        ]);
        return redirect()->back()->with('success', 'Successfully updated.');
    }

    public function attendancePage()
    {
        $periods = ClsPeriod::all();
        $attendances = Attendance::all();
        return view('admin.attendance', compact('periods', 'attendances'));
    }


    public function createAttendance(Request $request)
    {
        $week = date('l', strtotime($request->date));
        $checkAtd = Attendance::whereDate('date', $request->date)
            ->where('teacher_id', auth()->user()->id)
            ->where('period_id', $request->period_id)
            ->first();
        if ($checkAtd) {
            return redirect()->back()->with('error', 'Already created...');
        }

        if ($request->period_id == 1) {
            $routine = Routine::where('period_1_t_id', auth()->user()->id)
                ->where('week_day', $week)
                ->first();
            if (!$routine) {
                return redirect()->back()->with('error', 'You do not have class on this period');
            } else {
                $subject_id = $routine->period_1_sub_id;
            }
        } elseif ($request->period_id == 2) {
            $routine = Routine::where('period_2_t_id', auth()->user()->id)
                ->where('week_day', $week)
                ->first();
            if (!$routine) {
                return redirect()->back()->with('error', 'You do not have class on this period');
            } else {
                $subject_id = $routine->period_2_sub_id;
            }
        } elseif ($request->period_id == 3) {
            $routine = Routine::where('period_3_t_id', auth()->user()->id)
                ->where('week_day', $week)
                ->first();
            if (!$routine) {
                return redirect()->back()->with('error', 'You do not have class on this period');
            } else {
                $subject_id = $routine->period_3_sub_id;
            }
        } elseif ($request->period_id == 4) {
            $routine = Routine::where('period_4_t_id', auth()->user()->id)
                ->where('week_day', $week)
                ->first();
            if (!$routine) {
                return redirect()->back()->with('error', 'You do not have class on this period');
            } else {
                $subject_id = $routine->period_4_sub_id;
            }
        } elseif ($request->period_id == 5) {
            // break time
            return redirect()->back()->with('error', 'You do not have class on this period');
        } elseif ($request->period_id == 6) {
            $routine = Routine::where('period_5_t_id', auth()->user()->id)
                ->where('week_day', $week)
                ->first();
            if (!$routine) {
                return redirect()->back()->with('error', 'You do not have class on this period');
            } else {
                $subject_id = $routine->period_5_sub_id;
            }
        } elseif ($request->period_id == 7) {
            $routine = Routine::where('period_6_t_id', auth()->user()->id)
                ->where('week_day', $week)
                ->first();
            if (!$routine) {
                return redirect()->back()->with('error', 'You do not have class on this period');
            } else {
                $subject_id = $routine->period_6_sub_id;
            }
        } elseif ($request->period_id == 8) {
            $routine = Routine::where('period_7_t_id', auth()->user()->id)
                ->where('week_day', $week)
                ->first();
            if (!$routine) {
                return redirect()->back()->with('error', 'You do not have class on this period');
            } else {
                $subject_id = $routine->period_7_sub_id;
            }
        } elseif ($request->period_id == 9) {
            $routine = Routine::where('period_8_t_id', auth()->user()->id)
                ->where('week_day', $week)
                ->first();
            if (!$routine) {
                return redirect()->back()->with('error', 'You do not have class on this period');
            } else {
                $subject_id = $routine->period_8_sub_id;
            }
        } else {
            return redirect()->back()->with('error', 'You do not have class on this period');
        }

        if (isset($routine)) {
            $attendance = Attendance::create([
                'date' => $request->date,
                'week_day' => $week,
                'section_id' => $routine->section_id,
                'period_id' => $request->period_id,
                'subject_id' => $subject_id,
                'teacher_id' => auth()->user()->id,
            ]);

            $students = StudentAssignSection::where('section_id', $routine->section_id)->get();
            foreach ($students as $data) {
                $attendanceDetails = AttendanceDetails::create([
                    'attendance_id' => $attendance->id,
                    's_user_id' => $data->user_id,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Attendance sheet created.');
    }

    public function checkAttendance($id)
    {
        $attendance = Attendance::find($id);
        $attendanceDetails = AttendanceDetails::where('attendance_id', $id)->get();

        return view('admin.check-attendance', compact('attendanceDetails', 'attendance'));
    }

    public function teacherList()
    {
        $teachers = User::join('teachers', 'teachers.user_id', 'users.id')
            ->where('users.role', 'teacher')
            ->get();

        return view('admin.teacher-list', compact('teachers'));
    }

    public function checkTeacherList($id)
    {
        $teacher = User::find($id);
        $teacherDetails = Teacher::where('user_id', $id)->first();

        return view('admin.check-teacher-list', compact('teacherDetails', 'teacher'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\ClsPeriod;
use App\Models\Routine;
use App\Models\Section;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class RoutineController extends Controller
{
    public function routineDashboard()
    {
        $routines = Routine::groupBy('section_id')->pluck('section_id', 'section_id');

        // dd($routines);

        $sections = Section::all();
        $periods = ClsPeriod::all();
        $subjects = Subject::where('status', 1)->get();
        $teachers = User::where('role', 'teacher')->get();
        return view('admin.routine', compact('routines', 'sections', 'subjects', 'periods', 'teachers'));
    }

    public function store(Request $request)
    {

        $check = Routine::where('section_id', $request->section_id)->first();
        if ($check) {
            return redirect()->back()->with('error', 'Already exists.');
        }
        $weeks = ["Saturday", "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday"];
        // dd(($weeks));
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
        ]);
        return redirect()->back()->with('success', 'Successfully updated.');
    }

    public function periodPage()
    {
        $periods = ClsPeriod::all();
        return view('admin.period', compact('periods'));
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

    public function updatePeriod(Request $request)
    {
        ClsPeriod::find($request->period_id)->update([
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);
        return redirect()->back()->with('success', 'Successfully updated.');
    }

    public function updateWeekDay(Request $request)
    {
        $routine = Routine::find($request->routine_id);
        if (!$routine) {
            return redirect()->back()->with('error', 'Invalid request.');
        }
        $routine->update([
            "period_1_sub_id" => $request->period_1_sub_id,
            // "period_1_t_id" => $request->period_1_t_id,

            "period_2_sub_id" => $request->period_2_sub_id,
            // "period_2_t_id" => $request->period_2_t_id,

            "period_3_sub_id" => $request->period_3_sub_id,
            // "period_3_t_id" => $request->period_3_t_id,

            "period_4_sub_id" => $request->period_4_sub_id,
            // "period_4_t_id" => $request->period_4_t_id,

            "period_5_sub_id" => $request->period_5_sub_id,
            // "period_5_t_id" => $request->period_5_t_id,

            "period_6_sub_id" => $request->period_6_sub_id,
            // "period_6_t_id" => $request->period_6_t_id,

            "period_7_sub_id" => $request->period_7_sub_id,
            "period_7_t_id" => $request->period_7_t_id,

            "period_8_sub_id" => $request->period_8_sub_id,
            "period_8_t_id" => $request->period_8_t_id
        ]);
        return redirect()->back()->with('success', 'Successfully added.');
    }

    public function updateTeacher(Request $request)
    {
        $routine = Routine::find($request->routine_id);

        if ($request->period == 1) {
            $check = Routine::where('period_1_t_id', $request->t_id)->where('week_day', $request->week_day)->get();
            if ($check->count() > 0) {
                goto end;
            }
            $routine->update([
                'period_1_t_id' => $request->t_id
            ]);
        } elseif ($request->period == 2) {
            $check = Routine::where('period_2_t_id', $request->t_id)->where('week_day', $request->week_day)->get();
            if ($check->count() > 0) {
                goto end;
            }
            $routine->update([
                'period_2_t_id' => $request->t_id
            ]);
        } elseif ($request->period == 3) {
            $check = Routine::where('period_3_t_id', $request->t_id)->where('week_day', $request->week_day)->get();
            if ($check->count() > 0) {
                goto end;
            }
            $routine->update([
                'period_3_t_id' => $request->t_id
            ]);
        } elseif ($request->period == 4) {
            $check = Routine::where('period_4_t_id', $request->t_id)->where('week_day', $request->week_day)->get();
            if ($check->count() > 0) {
                goto end;
            }
            $routine->update([
                'period_4_t_id' => $request->t_id
            ]);
        } elseif ($request->period == 5) {
            $check = Routine::where('period_5_t_id', $request->t_id)->where('week_day', $request->week_day)->get();
            if ($check->count() > 0) {
                goto end;
            }
            $routine->update([
                'period_5_t_id' => $request->t_id
            ]);
        } elseif ($request->period == 6) {
            $check = Routine::where('period_6_t_id', $request->t_id)->where('week_day', $request->week_day)->get();
            if ($check->count() > 0) {
                goto end;
            }
            $routine->update([
                'period_6_t_id' => $request->t_id
            ]);
        } elseif ($request->period == 7) {
            $check = Routine::where('period_7_t_id', $request->t_id)->where('week_day', $request->week_day)->get();
            if ($check->count() > 0) {
                goto end;
            }
            $routine->update([
                'period_7_t_id' => $request->t_id
            ]);
        } elseif ($request->period == 8) {
            $check = Routine::where('period_8_t_id', $request->t_id)->where('week_day', $request->week_day)->get();
            if ($check->count() > 0) {
                goto end;
            }
            $routine->update([
                'period_8_t_id' => $request->t_id
            ]);
        } else {
            return redirect()->back()->with('error', 'Something went wrong...');
        }

        return redirect()->back()->with('success', 'Successfully updated.');

        end:
        return redirect()->back()->with('error', 'Class conflict.');
    }
}

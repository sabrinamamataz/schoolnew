<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Stclass;
use App\Models\StudentAssignSection;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    public function adminDashboard()
    {
        $students = User::where('role', 'student')->count();
        $teachers = User::where('role', 'teacher')->count();
        $subjects = Subject::all()->count();
        $classes = Stclass::all()->count();
        return view('admin.dashboard', compact('students', 'teachers', 'subjects', 'classes'));
    }

    public function sectionDashboard()
    {
        $sections = Section::all();
        $classes = Stclass::where('status', 1)->get();
        $t_ids = Section::all()->pluck('teacher_id')->toArray();
        $teachers = User::where('role', 'teacher')->whereNotIn('id', $t_ids)->get();
        return view('admin.section', compact('sections', 'classes', 'teachers'));
    }

    public function store(Request $request)
    {
        $check = Section::where('teacher_id', $request->teacher_id)->get();
        if ($check->count() > 0) {
            return redirect()->back()->with('error', 'Teacher is sUpervisor in another section, select another teacher.');
        } else {
            $newSection = Section::create([
                'class_id' => $request->class_id,
                'section' => $request->section,
                'student_capacity' => $request->student_capacity,
                'shift' => $request->shift,
                'teacher_id' => $request->teacher_id,
                'status' => 1
            ]);
            return redirect()->back()->with('success', 'Successfully added.');
        }
    }

    public function update(Request $request)
    {
        $section = Section::find($request->section_id);
        $section->update([
            'section' => $request->section,
            'student_capacity' => $request->student_capacity,
            'shift' => $request->shift,
            'teacher_id' => $request->teacher_id,
        ]);
        return redirect()->back()->with('success', 'Successfully updated.');
    }

    public function sectionStudentList($section_id)
    {
        $section = Section::join('stclasses', 'stclasses.id', 'sections.class_id')
            ->select('sections.*', 'stclasses.class_name')
            ->where('sections.id', $section_id)
            ->first();

        $otherSections = Section::where('class_id', $section->class_id)->get()->pluck('id');

        $std_ids = StudentAssignSection::whereIn('section_id', $otherSections)->get()->pluck('user_id');

        $stdSelect = User::join('students', 'students.user_id', 'users.id')
            ->select('students.*', 'users.name', 'users.name', 'users.email', 'users.role')
            ->where('students.class', $section->class_id)
            ->whereNotIn('users.id', $std_ids)
            ->get();

        $existing_ids = StudentAssignSection::where('section_id', $section->id)->get()->pluck('user_id');
        $students = User::join('students', 'students.user_id', 'users.id')
            ->select('students.*', 'users.name', 'users.name', 'users.email', 'users.role')
            ->where('users.role', 'student')
            ->whereIn('users.id', $existing_ids)
            ->get();

        return view('admin.section-student-list', compact('students', 'section', 'stdSelect'));
    }

    public function addStudentToSection($ids, $section_id)
    {
        $section = Section::find($section_id);
        $studentCount = StudentAssignSection::where('section_id', $section_id)->where('status', date('Y'))->get()->count();

        $ids = explode(",", $ids);

        foreach ($ids as $id) {
            $check = StudentAssignSection::where('user_id', $id)->where('status', date('Y'))->first();
            if (isset($check)) {
                continue;
            } else {
                if ($studentCount >= $section->student_capacity) {
                    return false;
                }
                $studentCount++;
                StudentAssignSection::create([
                    'student_id' => $studentCount,
                    'user_id' => $id,
                    'section_id' => $section_id,
                    'status' => date('Y')
                ]);
            }
        }
        return true;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\StudentAssignSection;
use App\Models\StudyMaterial;
use Illuminate\Http\Request;

class StudyMaterialController extends Controller
{
    public function store(Request $request)
    {
        $section = Section::find($request->section_id);

        $file_name = '';
        //check if $request has file
        if ($request->hasFile('doc')) {
            //check if file is valid or not
            $file = $request->file('doc');
            if ($file->isValid()) {
                //generate unique file name
                $file_name = date('Ymdhms') . '.' . $file->getClientOriginalExtension();

                //store image in local directory
                $file->storeAs('files', $file_name);
            }
        }

        StudyMaterial::create([
            'title' => $request->title,
            'teacher_id' => auth()->id(),
            'class_id' => $section->class_id,
            'section_id' => $section->id,
            'doc' => $file_name,
            'status' => 0,
        ]);
        return redirect()->back()->with('success', 'Successfully added.');
    }

    public function update(Request $request)
    {
        $studymaterial = Studymaterial::find($request->class_id);

        $name = $request->file('doc')->getClientOriginalName();

        $path = $request->file('doc')->store('public/files');

        $studymaterial->update([
            'teacher_id' => $request->teacher_id,
            'class_id' => $request->class_id,
            'section_id' => $request->section_id,
            'doc' => $name,
        ]);
        return redirect()->back()->with('success', 'Successfully updated.');
    }

    public function destroy($id)
    {
        $studymaterial = Studymaterial::find($id);

        $image_path = public_path() . '/files/' . $studymaterial->doc;

        if (file_exists($image_path)) {
            unlink($image_path);
        }
        $studymaterial->delete();
        return redirect()->back()->with('success', 'Successfully deleted.');
    }

    public function adminStudyMaterials()
    {
        $studymaterials = StudyMaterial::all();

        return view('admin.study-material', compact('studymaterials'));
    }

    public function approveStudyMaterials($id)
    {
        StudyMaterial::find($id)->update(['status' => 1]);
        return redirect()->back()->with('success', 'Study material approved successfully.');
    }

    public function studentStudyMaterials()
    {
        $stdSec = StudentAssignSection::where('user_id', auth()->id())->first();
        if ($stdSec) {
            $studymaterials = StudyMaterial::where('section_id', $stdSec->section_id)->where('status', 1)->get();
        } else {
            $studymaterials = collect();
        }
        return view('student.study-material', compact('studymaterials'));
    }
}

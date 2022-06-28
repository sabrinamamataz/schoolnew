<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\StudentAssignSection;
use App\Models\StudyMaterial;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudymaterialController extends Controller
{
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Class  $studymaterial
     * @return \Illuminate\Http\Response
     */
    public function show(Studymaterial $studymaterial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Studtmaterial  $studymaterial
     * @return \Illuminate\Http\Response
     */
    public function edit(Studymaterial $studymaterial)
    {
        // $studymaterial = Studymaterial($id)
        // returen view('studymaterial.edit' ,['studymaterial'=>$studymaterial])

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Studymaterial  $studymaterial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $studymaterial = Studymaterial::find($request->class_id);

        $validatedData = $request->validate([
            'doc' => 'required|csv,txt,xlx,xls,pdf|max:2048',

        ]);

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Studymaterial  $studymaterial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Studymaterial::find($id)->delete();
        return redirect()->back()->with('success', 'Successfully deleted.');
    }


    public function download($id)
    {

        $headers = [
            'Content-Description' => 'File Transfer',
            'Content-Type' => 'application/pdf',
        ];
        // return \Response::download($filepath, 'new doc', $headers);

        return response()->download($filepath, 'New File', $headers);
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
        $stdSec = StudentAssignSection::where('user_id', auth()->id())->first()->section_id;
        $studymaterials = StudyMaterial::where('section_id', $stdSec)->where('status', 1)->get();
        return view('student.study-material', compact('studymaterials'));
    }
}

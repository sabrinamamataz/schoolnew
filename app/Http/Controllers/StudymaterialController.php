<?php

namespace App\Http\Controllers;
use App\Models\StudyMaterial;

use Illuminate\Http\Request;

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
        $newStudymaterial = StudyMaterial::create([
            'teacher_id' => $request->teacher_id,
            'class_id' => $request->class_id,
            'section_id' => $request->section_id,
            'doc' => $request->doc,
            'status' => 1
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
        $studymaterial->update([
            'teacher_id' => $request->teacher_id,
            'class_id' => $request->class_id,
            'section_id' => $request->section_id,
            'doc' => $request->doc,
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
        $studymaterial = DB::table('study_material')->where('id',$id)->first();
        $filepath = storage_path("app/{$studymaterial->path}");
        return\Response::download($filepath); 

        
    }
    

}

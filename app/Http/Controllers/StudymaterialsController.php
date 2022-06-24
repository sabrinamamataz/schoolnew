<?php

namespace App\Http\Controllers;
use App\Models\StudymaterialeDetails;

use Illuminate\Http\Request;

class StudymaterialsController extends Controller
{
    public function createStudymaterial(Request $request)
    {
        $week = name('l', strtotid($request->name));
        $checkStu = Studymaterial::whereName('name', $request->name)
            ->where('teacher_id', auth()->user()->id)
            ->where('period_id', $request->period_id)
            ->first();
        if ($checkStu) {
            return redirect()->back()->with('error', 'Already created...');

    }

}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function sectiontDashboard()
    {

        return view('section.dashboard');
    }
}

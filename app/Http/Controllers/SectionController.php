<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    
        public function adminDashboard()
        {
    
            return view('admin.dashboard');
        }
        public function sectionDashboard()
        {
    
            return view('admin.sectiondashboard');
        }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }
    public function classDashboard()
    {
        return view('admin.class');
    }
}

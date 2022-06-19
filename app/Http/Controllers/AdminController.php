<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function studentList()
    {
        $students = User::join('students', 'students.user_id', 'users.id')
            ->select('students.*', 'users.name', 'users.name', 'users.email', 'users.role')
            ->where('users.role', 'student')
            ->get();

            // dd($students);
        return view('admin.student-list', compact('students'));
    }
}

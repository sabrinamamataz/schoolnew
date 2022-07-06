<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $guarded = [];

    // function to create relationship with attendance and section table
    public function attendanceToSection()
    {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }

    // function to create relationship with attendance and section table
    public function attendanceToPeriod()
    {
        return $this->belongsTo(ClsPeriod::class, 'period_id', 'id');
    }

    
    // function to create relationship with attendance and teacher table
    public function attendanceToTeacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }
}

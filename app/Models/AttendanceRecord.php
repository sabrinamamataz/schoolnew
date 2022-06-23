<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceRecord extends Model
{
    use HasFactory;
    protected $guarded = [];

    // function to create relationship with attendance record and section table
    public function attendanceRecordToSection()
    {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }
}

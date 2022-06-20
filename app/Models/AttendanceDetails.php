<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceDetails extends Model
{
    use HasFactory;
    protected $guarded = [];
    // function to create relationship with attendance and section table
    public function attendanceToUser()
    {
        return $this->belongsTo(User::class, 's_user_id', 'id');
    }
}

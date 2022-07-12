<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $guarded = [];

    static function getTeacherName($user_id)
    {
        $user = User::find($user_id);
        $name = '--';
        if (isset($user->name)) {
            $name = $user->name;
        }
        return $name;
    }

    public function teacherToSubject()
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }
};

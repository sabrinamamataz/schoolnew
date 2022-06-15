<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function getSubjectName($subject_id)
    {
        $subject = Subject::find($subject_id);
        $name = '--';
        if (isset($subject->subject_name)) {
            $name = $subject->subject_name;
        }
        return $name;
    }
}

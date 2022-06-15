<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $guarded = [];

    // function to create relationship with the section and class table
    public function sectionToClass()
    {
        return $this->belongsTo(Stclass::class, 'class_id', 'id');
    }
    // function to create relationship with section and users table teacher column
    public function sectionToUserTeacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    public static function getSectionAndCls($section_id)
    {

        $data = Section::find($section_id);

        return $data->sectionToClass->class_name . ' - Section: ' . $data->section;
    }
}

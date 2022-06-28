<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyMaterial extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function materialToClass()
    {
        return $this->belongsTo(Stclass::class, 'class_id', 'id');
    }

    public function materialToSection()
    {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }

    
    public function materialToTeacherUser()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }
}

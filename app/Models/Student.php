<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];
  
    // function to create relationship with routine and section table
    public function routineToSection()
    {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }
}

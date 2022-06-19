<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAssignSection extends Model
{
    use HasFactory;
    protected $guarded = [];

    // function to create relationship with the StudentAssignSection and section table
    public function assignSectionToSection()
    {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }
}

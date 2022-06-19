<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    // function to create relationship with student and class table
    public function studentToClass()
    {
        return $this->belongsTo(Stclass::class, 'class', 'id');
    }
}

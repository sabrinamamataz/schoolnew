<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\Stclass;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = Stclass::all();
        $teachers = Teacher::all()->pluck('user_id')->toArray();

        foreach ($classes as $class) {
            shuffle($teachers);

            Section::create([
                'class_id' => $class->id,
                'section' => 'A',
                'teacher_id' => $teachers[0],
                'student_capacity' => 50,
                'shift' => 'Morning'
            ]);
            Section::create([
                'class_id' => $class->id,
                'section' => 'B',
                'teacher_id' => $teachers[1],
                'student_capacity' => 50,
                'shift' => 'Morning'
            ]);
        }
    }
}

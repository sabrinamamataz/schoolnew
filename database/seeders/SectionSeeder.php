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

        foreach ($classes as $class) {
            $t_ids = Section::all()->pluck('teacher_id');
            $teachers = Teacher::whereNotIn('user_id', $t_ids)->pluck('user_id')->toArray();

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

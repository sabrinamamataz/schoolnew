<?php

namespace Database\Seeders;

use App\Models\Subject;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject = [
            ['subject_name' => 'Bangla', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'English', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Mathematics', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Science', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Religion', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Physical Education', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Social Studies', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Arts', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Crafts', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Music', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Algebra', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Geometry', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Biology', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Physics', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Chemistry', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Geography', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'History', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Citizenship', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Business Studies', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['subject_name' => 'Home Economics', 'credit' => 3, 'passing_mark' => 30, 'fee' => 3000, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];
        Subject::insert($subject);
    }
}

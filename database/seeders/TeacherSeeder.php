<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $subjects = Subject::all()->pluck('id')->toArray();

        for ($i = 1; $i <= 30; $i++) {
            $newUser = User::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'password' => bcrypt('password'),
                'role' => 'teacher',
                'gender' => $faker->randomElement(['Male', 'Female'])
            ]);

            shuffle($subjects);
            Teacher::create([
                'user_id' => $newUser->id,
                'subject_id' => $subjects[0],
                'designation' => 'Assistant Teacher'
            ]);
        }
    }
}

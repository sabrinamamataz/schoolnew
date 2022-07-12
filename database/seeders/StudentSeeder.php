<?php

namespace Database\Seeders;

use App\Models\Stclass;
use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $classes = Stclass::all()->pluck('id')->toArray();

        for ($i = 1; $i <= 500; $i++) {
            $newUser = User::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'password' => bcrypt('password'),
                'role' => 'student'
            ]);

            shuffle($classes);
            Student::create([
                'user_id' => $newUser->id,
                'class' => $classes[0],
            ]);
        }
    }
}

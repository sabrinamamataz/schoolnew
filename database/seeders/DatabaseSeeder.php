<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            PeriodSeeder::class,
            ClassSeeder::class,
            SubjectSeeder::class,
            StudentSeeder::class,
            TeacherSeeder::class,
            SectionSeeder::class,
        ]);
    }
}

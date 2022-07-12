<?php

namespace Database\Seeders;

use App\Models\Section;
use App\Models\Stclass;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $class = [
            ['class_name' => 'Class 1', 'capacity' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'Class 2', 'capacity' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'Class 3', 'capacity' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'Class 4', 'capacity' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['class_name' => 'Class 5', 'capacity' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];
        Stclass::insert($class);
    }
}

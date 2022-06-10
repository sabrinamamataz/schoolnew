<?php

namespace Database\Seeders;

use App\Models\ClsPeriod;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $period = [
            ['period' => '1st', 'start_time' => "08:01", 'end_time' => "08:30", 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['period' => '2nd', 'start_time' => "08:31", 'end_time' => "09:00", 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['period' => '3rd', 'start_time' => "09:01", 'end_time' => "09:30", 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['period' => '4th', 'start_time' => "09:31", 'end_time' => "10:00", 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['period' => 'Break', 'start_time' => "10:01", 'end_time' => "10:30", 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['period' => '5th', 'start_time' => "10:31", 'end_time' => "11:00", 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['period' => '6th', 'start_time' => "11:01", 'end_time' => "11:30", 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['period' => '7th', 'start_time' => "11:31", 'end_time' => "12:00", 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['period' => '8th', 'start_time' => "12F:01", 'end_time' => "12:30", 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];
        ClsPeriod::insert($period);
    }
}

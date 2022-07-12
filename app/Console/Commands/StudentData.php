<?php

namespace App\Console\Commands;

use App\Models\Stclass;
use App\Models\Student;
use App\Models\User;
use Illuminate\Console\Command;

class StudentData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'student:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Populate student data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $classes = Stclass::all()->pluck('id')->toArray();
        $user = User::where('role', 'student')->get();
        foreach ($user as $userData) {
            shuffle($classes);
            $studentData = Student::where('user_id', $userData->id)->first();
            if (!$studentData) {
                $newStudent = Student::create([
                    'user_id' => $userData->id,
                    'class' => $classes[0],
                ]);
            }
        }
        return 0;
    }
}

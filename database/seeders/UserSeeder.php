<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mr Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'Mr Teacher',
            'email' => 'teacher@mail.com',
            'password' => bcrypt('123'),
            'role' => 'teacher'
        ]);
        User::create([
            'name' => 'Mr Student',
            'email' => 'student@mail.com',
            'password' => bcrypt('123'),
            'role' => 'student'
        ]);
    }
}

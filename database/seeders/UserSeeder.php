<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Mali Gangu',
                'email' => 'Gangu@gmail.com',
                'password' => Hash::make('979797'),
            ],
            [
                'name' => 'Dilip Yadav',
                'email' => 'dilip@gmail.com',
                'password' => Hash::make('757575'),
            ],
            [
                'name' => 'Dinesh Kartik',
                'email' => 'Dinesh@gmail.com',
                'password' => Hash::make('123@dinesh'),
            ],
            // Add more dummy data here if needed
        ]);
    }
}

// 2:11:00

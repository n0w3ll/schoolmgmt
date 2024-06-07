<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('abc123456'),
            'user_type' => 1
        ]);

        User::create([
            'name' => 'Teacher',
            'email' => 'teacher@test.com',
            'password' => Hash::make('abc123456'),
            'user_type' => 2
        ]);

        User::create([
            'name' => 'Student',
            'email' => 'student@test.com',
            'password' => Hash::make('abc123456'),
            'user_type' => 3
        ]);

        User::create([
            'name' => 'Parent',
            'email' => 'parent@test.com',
            'password' => Hash::make('abc123456'),
            'user_type' => 4
        ]);
    }
}

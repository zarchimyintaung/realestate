<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            // Admin
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email'=> 'admin@gmail.com',
                'password'=>Hash::make('password'),
                'role' => 'admin',
                'status' => 'active'
            ],

            // Editor
            [
                'name' => 'Editor',
                'username' => 'editor',
                'email'=> 'editor@gmail.com',
                'password'=>Hash::make('password'),
                'role' => 'editor',
                'status' => 'active',
            ],

            // User
            [
                'name' => 'User',
                'username' => 'user',
                'email'=> 'user@gmail.com',
                'password'=>Hash::make('password'),
                'role' => 'user',
                'status' => 'active',
            ],
        ]);
    }
}

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
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'password_31',
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Client User',
            'email' => 'client@example.com',
            'password' => 'password_31',
            'is_admin' => false
        ]);
    }
}
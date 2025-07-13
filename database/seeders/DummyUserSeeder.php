<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    User::create([
    'name' => 'Admin1',
    'email' => 'admin1@example.com',
    'password' => Hash::make('password12')
    ]);

    User::create([
    'name' => 'Admin2',
    'email' => 'admin2@example.com',
    'password' => Hash::make('password34')
    ]);

    User::create([
    'name' => 'Admin3',
    'email' => 'admin3@example.com',
    'password' => Hash::make('password56')
    ]);    
    }
}



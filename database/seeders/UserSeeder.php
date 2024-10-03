<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
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
            'name' => 'Teguh Bagas',
            'username' => 'teguhbagas',
            'email' => 'teguh123@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('teguh123'),
            'remember_token' => Str::random(10),
        ]);

        User::factory(5)->create();
    }
}

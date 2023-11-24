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
        User::factory(20)->create();
        User::create([
            'name' => 'Aldian Utama',
            'email' => 'utama@gmail.com',
            'email_verified_at' => now(),
            'roles' => 'ADMIN',
            'phone' => '6285239222140',
            'password' => Hash::make('123456'),
        ]);
    }
}

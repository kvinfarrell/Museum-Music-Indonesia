<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'adminMuseumMusik2009',
            'email' => 'admidMusemMusik@gmail.com',
            'password' => Hash::make("Admin2009MuseumMusik2009"),
        ]);
    }
}

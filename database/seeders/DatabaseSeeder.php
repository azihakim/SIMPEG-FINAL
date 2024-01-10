<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'role' => 'admin',
            'telepon' => '081234567890',
            'password' => '123'
        ]);

        User::create([
            'name' => 'pelamar',
            'username' => 'pelamar',
            'role' => 'pelamar',
            'telepon' => '081234567890',
            'password' => '123'
        ]);

        User::create([
            'name' => 'karyawan',
            'username' => 'karyawan',
            'role' => 'karyawan',
            'telepon' => '081234567890',
            'password' => '123'
        ]);
    }
}

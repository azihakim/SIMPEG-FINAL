<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Absensi;
use App\Models\Karyawan;
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

        // Absensi::create([
        //     'user_id' => 1,
        //     'lokasi' => 'palembang',
        //     'jenis' => 'masuk',
        //     'foto' => 'foto-1619784471.jpg',
        //     'created_at' => '2024-01-01 08:00:00'
        // ]);
        // Absensi::create([
        //     'user_id' => 1,
        //     'lokasi' => 'palembang',
        //     'jenis' => 'masuk',
        //     'foto' => 'foto-1619784471.jpg',
        //     'created_at' => '2024-01-15 08:00:00'
        // ]);

        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'role' => 'admin',
            'alamat' => 'palembang',
            'telepon' => '081234567890',
            'password' => '123'
        ]);

        // User::create([
        //     'name' => 'pelamar',
        //     'username' => 'pelamar',
        //     'role' => 'pelamar',
        //     'alamat' => 'palembang',
        //     'telepon' => '081234567890',
        //     'password' => '123'
        // ]);

        User::create([
            'name' => 'karyawan',
            'username' => 'karyawan',
            'role' => 'karyawan',
            'alamat' => 'palembang',
            'telepon' => '081234567890',
            'password' => '123'
        ]);

        User::create([
            'name' => 'manajer',
            'username' => 'manajer',
            'role' => 'manajer',
            'alamat' => 'palembang',
            'telepon' => '081234567890',
            'password' => '123'
        ]);

        Karyawan::create([
            'user_id' => 1,
            'status' => 'Aktif',
            'agama' => 'Islam',
            'jenis_kelamin' => 'Laki-laki',
            'nik' => '1234567890',
            'tgl_masuk' => '2021-01-01',
            'pendidikan_terakhir' => 'SMA',
            'jabatan' => 'Admin',
        ]);
        Karyawan::create([
            'user_id' => 2,
            'status' => 'Aktif',
            'agama' => 'Islam',
            'jenis_kelamin' => 'Laki-laki',
            'nik' => '1234567890',
            'tgl_masuk' => '2021-01-01',
            'pendidikan_terakhir' => 'SMA',
            'jabatan' => 'Karyawan',
        ]);
        Karyawan::create([
            'user_id' => 3,
            'status' => 'Aktif',
            'agama' => 'Islam',
            'jenis_kelamin' => 'Laki-laki',
            'nik' => '1234567890',
            'tgl_masuk' => '2021-01-01',
            'pendidikan_terakhir' => 'SMA',
            'jabatan' => 'Manajer',
        ]);
    }
}

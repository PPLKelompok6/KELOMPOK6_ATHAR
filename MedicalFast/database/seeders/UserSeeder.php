<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name' => 'Admin MedFast',
            'email' => 'admin@medfast.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Dokter
        $dokter1 = User::create([
            'name' => 'Dr. Andi',
            'email' => 'andi@medfast.com',
            'password' => Hash::make('password'),
            'role' => 'dokter',
        ]);

        $dokter2 = User::create([
            'name' => 'Dr. Budi',
            'email' => 'budi@medfast.com',
            'password' => Hash::make('password'),
            'role' => 'dokter',
        ]);

        // Pasien
        User::create([
            'name' => 'Pasien A',
            'email' => 'atharghiffari@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
            'doctor_id' => $dokter1->id,
        ]);

        User::create([
            'name' => 'Pasien B',
            'email' => 'fv.alfathfri@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
            'doctor_id' => $dokter1->id,
        ]);

        User::create([
            'name' => 'Pasien C',
            'email' => 'atharghiffari19@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'pasien',
            'doctor_id' => $dokter2->id,
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pengguna LMS (1 Dosen & 1 Mahasiswa)
        // TODO 1 : Buat akun awal untuk Dosen.
        // Hint:
        // - Gunakan email sebagai identitas akun.
        // - Lengkapi nama, password yang di-hash, role Dosen,dan nomor induk.
        // Akun Dosen
        User::updateOrCreate(
            ['email' => 'dosen@celoe.ac.id'],
            [
                'name' => 'Ahn Keonho M.T.',
                'password' => Hash::make('password123'),
                'role' => 'dosen',
                'nomor_induk' => 'D001',
            ]
        );

        // Akun Mahasiswa
        User::updateOrCreate(
            ['email' => 'mahasiswa@celoe.ac.id'],
            [
                'name' => 'Eom Seonghyeon',
                'password' => Hash::make('password123'),
                'role' => 'mahasiswa',
                'nomor_induk' => 'M001',
            ]
        );
    }
}
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
        // Membuat satu user dengan role 'admin'
        User::create([
            'name' => 'Admin Chupatu',
            'email' => 'admin@chupatu.com',
            'password' => Hash::make('password123'), // Ganti dengan password yang aman nanti
            'role' => 'admin',
        ]);

        // Anda bisa menambahkan user lain di sini jika perlu
        // Contoh: Membuat user customer untuk testing
        // User::create([
        //     'name' => 'Test Customer',
        //     'email' => 'customer@chupatu.com',
        //     'password' => Hash::make('password123'),
        //     'role' => 'customer', // atau biarkan kosong karena defaultnya adalah customer
        // ]);
    }
}

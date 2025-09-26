<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Baris ini akan memberitahu Laravel untuk menjalankan UserSeeder.php
        // kita menghapus kode factory default.
        $this->call([
            UserSeeder::class,
        ]);
    }
}

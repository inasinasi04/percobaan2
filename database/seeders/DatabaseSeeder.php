<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // --- 1. MEMBUAT USER ADMIN (Dengan Pengecekan) ---
        
        // Kita cek dulu apakah user dengan email ini sudah ada?
        // Jika belum ada, baru kita buat. Ini mencegah error UniqueConstraintViolationException.
        $existingUser = User::where('email', 'test@example.com')->first();
        
        if (!$existingUser) {
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        }

        // --- 2. MEMANGGIL SEEDER TUGAS (Sesuai Gambar) ---
        
        // Pastikan kamu sudah membuat file-file seeder ini menggunakan:
        // php artisan make:seeder KategoriSeeder, dst.
        $this->call([
            LevelSeeder::class, 
            UserSeeder::class,
            KategoriSeeder::class,
            SupplierSeeder::class,
            BarangSeeder::class,
            StokSeeder::class,
            PenjualanSeeder::class,
            PenjualanDetailSeeder::class, 
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['level_id' => 1, 'level_kode' => 'ADM', 'level_nama' => 'Administrator', 'created_at' => now(), 'updated_at' => now()],
            ['level_id' => 2, 'level_kode' => 'MNG', 'level_nama' => 'Manager', 'created_at' => now(), 'updated_at' => now()],
            ['level_id' => 3, 'level_kode' => 'STF', 'level_nama' => 'Staff/Kasir', 'created_at' => now(), 'updated_at' => now()],
        ];

        // Pastikan nama kolom 'level_kode' & 'level_nama' sesuai dengan migration m_level kamu
        DB::table('m_level')->insert($data);
    }
}

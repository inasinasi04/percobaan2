<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        
        // Loop untuk 15 barang (ID 1 sampai 15)
        for ($barang_id = 1; $barang_id <= 15; $barang_id++) {
            $data[] = [
                'barang_id'   => $barang_id,
                'user_id'     => 1, // Pastikan user ID 1 sudah ada (dari UserFactory)
                'stok_jumlah' => rand(10, 50),
                'stok_tanggal'=> now(),
                'created_at'  => now(),
                'updated_at'  => now(),
            ];
        }

        DB::table('t_stok')->insert($data);
    }
}
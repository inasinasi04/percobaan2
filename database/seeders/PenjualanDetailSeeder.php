<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        
        // Loop untuk 10 transaksi yang sudah dibuat di PenjualanSeeder
        for ($penjualan_id = 1; $penjualan_id <= 10; $penjualan_id++) {
            
            // Setiap transaksi memiliki 3 barang detail
            for ($j = 1; $j <= 3; $j++) {
                $barang_id = rand(1, 15); // Pilih barang acak dari 1-15
                
                $data[] = [
                    'penjualan_id' => $penjualan_id,
                    'barang_id'    => $barang_id,
                    'harga'        => 15000,
                    'jumlah'       => rand(1, 5),
                    'created_at'   => now(),
                    'updated_at'   => now(),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
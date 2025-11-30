<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $counter = 1;

        for ($supplierId = 1; $supplierId <= 3; $supplierId++) {
            for ($i = 1; $i <= 5; $i++) {
                $data[] = [
                    'kategori_id' => rand(1, 5), // Pilih kategori acak
                    'supplier_id' => $supplierId, // Sesuai instruksi: 5 barang per supplier
                    'barang_kode' => 'BRG' . str_pad($counter, 3, '0', STR_PAD_LEFT),
                    'barang_nama' => 'Barang ke-' . $counter,
                    'harga_beli'  => 10000,
                    'harga_jual'  => 15000,
                ];
                $counter++;
            }
        }

    DB::table('m_barang')->insert($data);
    }
}

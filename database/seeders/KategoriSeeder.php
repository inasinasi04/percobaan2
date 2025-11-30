<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        ['kategori_kode' => 'KAT01', 'kategori_nama' => 'Elektronik'],
        ['kategori_kode' => 'KAT02', 'kategori_nama' => 'Pakaian'],
        ['kategori_kode' => 'KAT03', 'kategori_nama' => 'Makanan'],
        ['kategori_kode' => 'KAT04', 'kategori_nama' => 'Minuman'],
        ['kategori_kode' => 'KAT05', 'kategori_nama' => 'Kesehatan'],
        ];
        
    DB::table('m_kategori')->insert($data);
    
    }
}

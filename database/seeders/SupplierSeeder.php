<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        ['supplier_kode' => 'SUP01', 'supplier_nama' => 'PT Maju Jaya', 'supplier_alamat' => 'Jalan A'],
        ['supplier_kode' => 'SUP02', 'supplier_nama' => 'CV Berkah', 'supplier_alamat' => 'Jalan B'],
        ['supplier_kode' => 'SUP03', 'supplier_nama' => 'UD Makmur', 'supplier_alamat' => 'Jalan C'],
    ];

    DB::table('m_supplier')->insert($data);
    }
}

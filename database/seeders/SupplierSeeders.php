<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(array $parameters = [])
    {
        DB::table('m_supplier')->truncate();

        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SPR001', 'supplier_nama' => 'PT. Sumber Makmur', 'supplier_alamat' => 'Jl. Pahlawan No. 125, Jakarta'],
            ['supplier_id' => 2, 'supplier_kode' => 'SPR002', 'supplier_nama' => 'PT. Maju Jaya', 'supplier_alamat' => 'Jl. Sudirman No. 456, Bandung'],
            ['supplier_id' => 3, 'supplier_kode' => 'SPR003', 'supplier_nama' => 'PT. Slamet Abadi', 'supplier_alamat' => 'Jl. Bromo No. 78, Malang'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
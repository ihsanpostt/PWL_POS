<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(array $parameters = [])
    {

        $data = [
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Reza Rahardian', 'penjualan_kode' => 'SELL001', 'penjualan_tanggal' => '2026-03-01'],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Dian Sastro', 'penjualan_kode' => 'SELL002', 'penjualan_tanggal' => '2026-03-02'],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Nicholas Saputra', 'penjualan_kode' => 'SELL003', 'penjualan_tanggal' => '2026-03-03'],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Chelsea Islan', 'penjualan_kode' => 'SELL004', 'penjualan_tanggal' => '2026-03-04'],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Tara Basro', 'penjualan_kode' => 'SELL005', 'penjualan_tanggal' => '2026-03-05'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Adipati Dolken', 'penjualan_kode' => 'SELL006', 'penjualan_tanggal' => '2026-03-06'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Maudy Ayunda', 'penjualan_kode' => 'SELL007', 'penjualan_tanggal' => '2026-03-07'],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Iko Uwais', 'penjualan_kode' => 'SELL008', 'penjualan_tanggal' => '2026-03-08'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Luna Maya', 'penjualan_kode' => 'SELL009', 'penjualan_tanggal' => '2026-03-09'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Raline Shah', 'penjualan_kode' => 'SELL010', 'penjualan_tanggal' => '2026-03-10'],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(array $parameters = [])
    {
        DB::table('m_barang')->truncate();

        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG001', 'barang_nama' => 'Indomie Goreng Jumbo', 'harga_beli' => 2800, 'harga_jual' => 3500],
            ['barang_id' => 2, 'kategori_id' => 2, 'barang_kode' => 'BRG002', 'barang_nama' => 'Teh Botol Sosro', 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_id' => 3, 'kategori_id' => 3, 'barang_kode' => 'BRG003', 'barang_nama' => 'Chitato', 'harga_beli' => 5000, 'harga_jual' => 8000],
            ['barang_id' => 4, 'kategori_id' => 4, 'barang_kode' => 'BRG004', 'barang_nama' => 'Pisang', 'harga_beli' => 1500, 'harga_jual' => 2500],
            ['barang_id' => 5, 'kategori_id' => 5, 'barang_kode' => 'BRG005', 'barang_nama' => 'Sawi Putih', 'harga_beli' => 750, 'harga_jual' => 1000],
            ['barang_id' => 6, 'kategori_id' => 1, 'barang_kode' => 'BRG006', 'barang_nama' => 'ABC Sarden Pedas', 'harga_beli' => 17500, 'harga_jual' => 19500],
            ['barang_id' => 7, 'kategori_id' => 2, 'barang_kode' => 'BRG007', 'barang_nama' => 'Aqua Botol', 'harga_beli' => 2200, 'harga_jual' => 3500],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'BRG008', 'barang_nama' => 'Japota', 'harga_beli' => 8000, 'harga_jual' => 10000],
            ['barang_id' => 9, 'kategori_id' => 4, 'barang_kode' => 'BRG009', 'barang_nama' => 'Mangga', 'harga_beli' => 2000, 'harga_jual' => 2500],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'BRG010', 'barang_nama' => 'Kol', 'harga_beli' => 1500, 'harga_jual' => 2000],
            ['barang_id' => 11, 'kategori_id' => 1, 'barang_kode' => 'BRG011', 'barang_nama' => 'Mie Goreng ABC', 'harga_beli' => 2500, 'harga_jual' => 3500],
            ['barang_id' => 12, 'kategori_id' => 2, 'barang_kode' => 'BRG012', 'barang_nama' => 'Pocari', 'harga_beli'=> 5800,'harga_jual'=>7000],
            ['barang_id' => 13, 'kategori_id' => 3, 'barang_kode' => 'BRG013', 'barang_nama' => 'Kuda Mas', 'harga_beli' => 1300,'harga_jual'=>2500],
            ['barang_id' => 14, 'kategori_id' => 4, 'barang_kode' => 'BRG014', 'barang_nama' => 'Anggur', 'harga_beli' => 5500,'harga_jual'=>7000],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'BRG015', 'barang_nama' => 'Wortel', 'harga_beli' => 1000,'harga_jual'=>1500],
        ];
        DB::table('m_barang')->insert($data);
    }
}
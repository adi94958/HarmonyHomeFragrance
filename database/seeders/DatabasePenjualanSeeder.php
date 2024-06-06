<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabasePenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Penjualan data to be seeded
        DB::table('database_penjualan')->insert([
            [
                'kode_transaksi' => 'TR001',
                'tanggal_transaksi' => '2024-01-03',
                'kode_customer' => 'P-001',
            ],
            [
                'kode_transaksi' => 'TR002',
                'tanggal_transaksi' => '2024-03-03',
                'kode_customer' => 'P-002',
            ],
            [
                'kode_transaksi' => 'TR003',
                'tanggal_transaksi' => '2024-05-03',
                'kode_customer' => 'P-005',
            ],
        ]);

        DB::table('database_penjualan_detail')->insert([
            [
                'kode_transaksi' => 'TR001',
                'kode_barang' => 'PM-001',
                'jumlah' => 2,
            ],
            [
                'kode_transaksi' => 'TR001',
                'kode_barang' => 'PM-002',
                'jumlah' => 4,
            ],
            [
                'kode_transaksi' => 'TR002',
                'kode_barang' => 'PM-003',
                'jumlah' => 5,
            ],
            [
                'kode_transaksi' => 'TR002',
                'kode_barang' => 'PP-001',
                'jumlah' => 2,
            ],
            [
                'kode_transaksi' => 'TR003',
                'kode_barang' => 'PP-002',
                'jumlah' => 2,
            ],
        ]);
    }
}

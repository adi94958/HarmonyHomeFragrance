<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseCustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('database_customer')->insert([
            [
                'kode_customer' => 'P-001',
                'nama_customer' => 'Rania',
                'alamat' => 'Jl. Margacinta No. 9',
                'no_telp' => '022-8649'
            ],
            [
                'kode_customer' => 'P-002',
                'nama_customer' => 'Anton',
                'alamat' => 'Jl. Cibinong II No. 45',
                'no_telp' => '021-4232'
            ],
            [
                'kode_customer' => 'P-003',
                'nama_customer' => 'Alex',
                'alamat' => 'Jl. Cahaya No. 2',
                'no_telp' => '025-2344'
            ],
            [
                'kode_customer' => 'P-004',
                'nama_customer' => 'Bella',
                'alamat' => 'Jl. Manuk Jaya No. 31',
                'no_telp' => '024-6454'
            ],
            [
                'kode_customer' => 'P-005',
                'nama_customer' => 'Vina',
                'alamat' => 'Jl. Buah Batu III No. 1',
                'no_telp' => '022-4235'
            ],
        ]);
    }
}

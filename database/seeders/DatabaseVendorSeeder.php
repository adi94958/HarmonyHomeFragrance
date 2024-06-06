<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseVendorSeeder extends Seeder
{
    public function run()
    {
        DB::table('database_vendor')->insert([
            [
                'kode_vendor' => 'V-001',
                'nama_vendor' => 'PT Waxing',
                'alamat' => 'Jl. Margonda No. 1',
                'no_telp' => '021-3457',
            ],
            [
                'kode_vendor' => 'V-002',
                'nama_vendor' => 'PT Essence',
                'alamat' => 'Jl. Cijerah No. 3',
                'no_telp' => '022-5436',
            ],
            [
                'kode_vendor' => 'V-003',
                'nama_vendor' => 'PT Serum',
                'alamat' => 'Jl. Ciwastra IV No. 14',
                'no_telp' => '021-3455',
            ],
            [
                'kode_vendor' => 'V-004',
                'nama_vendor' => 'PT Bamboo',
                'alamat' => 'Jl. Cilandak No 9',
                'no_telp' => '022-5343',
            ],
            [
                'kode_vendor' => 'V-005',
                'nama_vendor' => 'PT Floral',
                'alamat' => 'Jl. Budi No. 21',
                'no_telp' => '026-5342',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseBarangSeeder extends Seeder
{
    public function run()
    {
        DB::table('database_barang')->insert([
            ['kode_barang' => 'AF-001', 'kategori' => 'Air Freshener', 'nama_barang' => 'Green Tea Zen Harmony', 'harga_beli' => 220000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'AF-002', 'kategori' => 'Air Freshener', 'nama_barang' => 'Cucumber Melon Oasis', 'harga_beli' => 220000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'AF-003', 'kategori' => 'Air Freshener', 'nama_barang' => 'Spiced Apple Delight', 'harga_beli' => 220000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'AF-004', 'kategori' => 'Air Freshener', 'nama_barang' => 'Minty Fresh Revitalizer', 'harga_beli' => 220000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'AF-005', 'kategori' => 'Air Freshener', 'nama_barang' => 'Mountain Pine Bliss', 'harga_beli' => 220000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'CF-001', 'kategori' => 'Car Freshener', 'nama_barang' => 'Fresh Rain Elegance', 'harga_beli' => 200000, 'unit' => 60, 'harga_jual' => 250000],
            ['kode_barang' => 'CF-002', 'kategori' => 'Car Freshener', 'nama_barang' => 'Peach Blossom Radiance', 'harga_beli' => 200000, 'unit' => 60, 'harga_jual' => 250000],
            ['kode_barang' => 'CF-003', 'kategori' => 'Car Freshener', 'nama_barang' => 'Exotic Mango Tango', 'harga_beli' => 200000, 'unit' => 60, 'harga_jual' => 250000],
            ['kode_barang' => 'CF-004', 'kategori' => 'Car Freshener', 'nama_barang' => 'Tropical Sunset Delight', 'harga_beli' => 200000, 'unit' => 60, 'harga_jual' => 250000],
            ['kode_barang' => 'CF-005', 'kategori' => 'Car Freshener', 'nama_barang' => 'Jasmine Petal Euphoria', 'harga_beli' => 200000, 'unit' => 60, 'harga_jual' => 250000],
            ['kode_barang' => 'EO-001', 'kategori' => 'Essential Oil', 'nama_barang' => 'Tea Tree', 'harga_beli' => 250000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'EO-002', 'kategori' => 'Essential Oil', 'nama_barang' => 'Lemon', 'harga_beli' => 250000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'EO-003', 'kategori' => 'Essential Oil', 'nama_barang' => 'Clove', 'harga_beli' => 250000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'EO-004', 'kategori' => 'Essential Oil', 'nama_barang' => 'Sandalwood', 'harga_beli' => 250000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'EO-005', 'kategori' => 'Essential Oil', 'nama_barang' => 'Rosemary', 'harga_beli' => 250000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'FO-001', 'kategori' => 'Fragrance Oil', 'nama_barang' => 'Jasmine Twilight', 'harga_beli' => 180000, 'unit' => 60, 'harga_jual' => 230000],
            ['kode_barang' => 'FO-002', 'kategori' => 'Fragrance Oil', 'nama_barang' => 'Forest Rain', 'harga_beli' => 180000, 'unit' => 60, 'harga_jual' => 230000],
            ['kode_barang' => 'FO-003', 'kategori' => 'Fragrance Oil', 'nama_barang' => 'Exotic Spice', 'harga_beli' => 180000, 'unit' => 60, 'harga_jual' => 230000],
            ['kode_barang' => 'FO-004', 'kategori' => 'Fragrance Oil', 'nama_barang' => 'Coconut Paradise', 'harga_beli' => 180000, 'unit' => 60, 'harga_jual' => 230000],
            ['kode_barang' => 'FO-005', 'kategori' => 'Fragrance Oil', 'nama_barang' => 'Cherry Blossom', 'harga_beli' => 180000, 'unit' => 60, 'harga_jual' => 230000],
            ['kode_barang' => 'IS-001', 'kategori' => 'Incense Stick', 'nama_barang' => 'Cinnamon', 'harga_beli' => 280000, 'unit' => 50, 'harga_jual' => 340000],
            ['kode_barang' => 'IS-002', 'kategori' => 'Incense Stick', 'nama_barang' => 'Jasmine', 'harga_beli' => 280000, 'unit' => 50, 'harga_jual' => 340000],
            ['kode_barang' => 'IS-003', 'kategori' => 'Incense Stick', 'nama_barang' => 'Rose', 'harga_beli' => 280000, 'unit' => 50, 'harga_jual' => 340000],
            ['kode_barang' => 'IS-004', 'kategori' => 'Incense Stick', 'nama_barang' => 'Cedarwood', 'harga_beli' => 280000, 'unit' => 50, 'harga_jual' => 340000],
            ['kode_barang' => 'IS-005', 'kategori' => 'Incense Stick', 'nama_barang' => 'Eucalyptus', 'harga_beli' => 280000, 'unit' => 50, 'harga_jual' => 340000],
            ['kode_barang' => 'PM-001', 'kategori' => 'Pillow Mist', 'nama_barang' => 'Rose Petal Pillow Elixir', 'harga_beli' => 250000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'PM-002', 'kategori' => 'Pillow Mist', 'nama_barang' => 'Lemon Lavender Lullaby', 'harga_beli' => 250000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'PM-003', 'kategori' => 'Pillow Mist', 'nama_barang' => 'Serenity Slumber Mist', 'harga_beli' => 250000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'PM-004', 'kategori' => 'Pillow Mist', 'nama_barang' => 'Ginger Lily Sleep Euphoria', 'harga_beli' => 250000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'PM-005', 'kategori' => 'Pillow Mist', 'nama_barang' => 'Peppermint Pillow Bliss', 'harga_beli' => 250000, 'unit' => 50, 'harga_jual' => 300000],
            ['kode_barang' => 'PP-001', 'kategori' => 'Pot Pourri', 'nama_barang' => 'Magnolia Bloom Elegance', 'harga_beli' => 150000, 'unit' => 60, 'harga_jual' => 200000],
            ['kode_barang' => 'PP-002', 'kategori' => 'Pot Pourri', 'nama_barang' => 'Autumn Spice Medley', 'harga_beli' => 150000, 'unit' => 60, 'harga_jual' => 200000],
            ['kode_barang' => 'PP-003', 'kategori' => 'Pot Pourri', 'nama_barang' => 'Chamomile Lavender', 'harga_beli' => 150000, 'unit' => 60, 'harga_jual' => 200000],
            ['kode_barang' => 'PP-004', 'kategori' => 'Pot Pourri', 'nama_barang' => 'Earthy Cedar Forest', 'harga_beli' => 150000, 'unit' => 60, 'harga_jual' => 200000],
            ['kode_barang' => 'PP-005', 'kategori' => 'Pot Pourri', 'nama_barang' => 'Cranberry Orange', 'harga_beli' => 150000, 'unit' => 60, 'harga_jual' => 200000],
            ['kode_barang' => 'RD-001', 'kategori' => 'Reed Diffuser', 'nama_barang' => 'Peppermint Bliss', 'harga_beli' => 400000, 'unit' => 50, 'harga_jual' => 450000],
            ['kode_barang' => 'RD-002', 'kategori' => 'Reed Diffuser', 'nama_barang' => 'Orchid Oasis', 'harga_beli' => 400000, 'unit' => 50, 'harga_jual' => 450000],
            ['kode_barang' => 'RD-003', 'kategori' => 'Reed Diffuser', 'nama_barang' => 'Autumn Harvest', 'harga_beli' => 400000, 'unit' => 50, 'harga_jual' => 450000],
            ['kode_barang' => 'RD-004', 'kategori' => 'Reed Diffuser', 'nama_barang' => 'Lemongrass Zen', 'harga_beli' => 400000, 'unit' => 50, 'harga_jual' => 450000],
            ['kode_barang' => 'RD-005', 'kategori' => 'Reed Diffuser', 'nama_barang' => 'Mystic Wood', 'harga_beli' => 400000, 'unit' => 50, 'harga_jual' => 450000],
            ['kode_barang' => 'RS-001', 'kategori' => 'Room Spray', 'nama_barang' => 'Lavender Serenade', 'harga_beli' => 350000, 'unit' => 50, 'harga_jual' => 390000],
            ['kode_barang' => 'RS-002', 'kategori' => 'Room Spray', 'nama_barang' => 'Secret Garden', 'harga_beli' => 350000, 'unit' => 50, 'harga_jual' => 390000],
            ['kode_barang' => 'RS-003', 'kategori' => 'Room Spray', 'nama_barang' => 'Zen Aura', 'harga_beli' => 350000, 'unit' => 50, 'harga_jual' => 390000],
            ['kode_barang' => 'RS-004', 'kategori' => 'Room Spray', 'nama_barang' => 'Bergamot Velvet', 'harga_beli' => 350000, 'unit' => 50, 'harga_jual' => 390000],
            ['kode_barang' => 'RS-005', 'kategori' => 'Room Spray', 'nama_barang' => 'Starfruit Zest', 'harga_beli' => 350000, 'unit' => 50, 'harga_jual' => 390000],
            ['kode_barang' => 'SC-001', 'kategori' => 'Scented Candle', 'nama_barang' => 'Citrus Bliss', 'harga_beli' => 200000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'SC-002', 'kategori' => 'Scented Candle', 'nama_barang' => 'Vanilla Velvet', 'harga_beli' => 200000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'SC-003', 'kategori' => 'Scented Candle', 'nama_barang' => 'Enchanted Forest', 'harga_beli' => 200000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'SC-004', 'kategori' => 'Scented Candle', 'nama_barang' => 'Ocean Breeze', 'harga_beli' => 200000, 'unit' => 50, 'harga_jual' => 250000],
            ['kode_barang' => 'SC-005', 'kategori' => 'Scented Candle', 'nama_barang' => 'Cozy Fireside', 'harga_beli' => 200000, 'unit' => 50, 'harga_jual' => 250000],
        ]);
    }
}

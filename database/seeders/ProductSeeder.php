<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'foto' => '1.png',
            'nama' => 'Camille Beaute',
            'harga' => '25000',
            'stok' => '20pcs',
            'deskripsi' => 'Masker Camille Beauty BPOM, Netto: 25gr & 65gr, 25gr = 10-12x pemakaian, 65gr = 24-25x pemakaian',
        ]);

        DB::table('products')->insert([
            'foto' => '2.png',
            'nama' => 'Beautetox',
            'harga' => '15000',
            'stok' => '24pcs',
            'deskripsi' => 'Masker Inspired by Indonesian Heritages BPOM, Netto: 20gr, 8-10x pemakaian',
        ]);

        DB::table('products')->insert([
            'foto' => '3.png',
            'nama' => 'Runaskin',
            'harga' => '15000',
            'stok' => '12pcs',
            'deskripsi' => 'Milky Series, Netto: 25gr, 10-12x pemakaian',
        ]);
    }
}

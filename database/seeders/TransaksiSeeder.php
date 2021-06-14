<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('transaksi')->insert([
            'tanggal' => '2021-01-05',
            'nama' => 'Camille Beaute',
            'jumlah' => '2',
            'harga' => '25000',
            'total' => '50000',
        ]);
    }
}

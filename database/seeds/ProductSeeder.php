<?php

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
        // DB::table('products')->insert([
        //     'kd_brg' => 'B-0001',
        //     'nm_brg' => 'Buku',
        //     'satuan' => 'Buah',
        //     'harga' => '5000',
        //     'harga_beli' => '6000',
        //     'stok' => '100',
        //     'stok_min' => '3',
        // ]);

        factory(App\Product::class,10)->create();
    }
}

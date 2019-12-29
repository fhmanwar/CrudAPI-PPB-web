<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'kd_brg' => 'B-0001',
        'nm_brg' => $faker->word,
        'satuan' => 'Buah',
        'harga' => $faker->numberBetween($min = 1000,$max = 30000),
        'harga_beli' => $faker->numberBetween($min = 1000,$max = 30000),
        'stok' => $faker->randomNumber($nbDigits = 3),
        'stok_min' => $faker->randomDigit,
    ];
});

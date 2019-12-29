<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $table = "products";

    // hanya boleh diisi data dalam array tetapi sisanya tidak
    protected $fillable = [
        'kd_brg','nm_brg','satuan','harga','harga_beli','stok','stok_min'
    ];

    // // tidak boleh diisi data dalam array sisanya boleh
    // protected $guarded  = [
    //     'kd_brg','nm_brg','satuan','harga','harga_beli','stok','stok_min'
    // ];

    use SoftDeletes;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = "penjualans";
    protected $fillable = [
        'id_order', 'id_anggrek', 'qty','subtotal'
    ];
}

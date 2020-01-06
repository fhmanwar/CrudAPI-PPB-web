<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cemilan extends Model
{
    protected $table = "cemilans";
    protected $fillable = [
        'nm_brg','desc','price','image'
    ];
    use SoftDeletes;
}

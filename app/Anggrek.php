<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anggrek extends Model
{
    protected $table = "anggreks";
    protected $fillable = [
        'name','desc','price','image'
    ];
    use SoftDeletes;
}

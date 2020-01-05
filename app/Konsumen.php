<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Konsumen extends Model
{
    protected $table = "users";
    protected $fillable = [
        'name', 'email', 'password','akses'
    ];
    use SoftDeletes;
}

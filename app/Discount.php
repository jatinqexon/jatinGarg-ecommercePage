<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    //
    protected $fillable = [
        
    ];

    protected $table = 'discount';
    public $timestamps = false;
    protected $primaryKey = "ID";
}

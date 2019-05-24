<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'name','size','gender','price','pertentage','image_name'
    ];

    protected $table = 'product';
    public $timestamps = false;
    protected $primaryKey = "ID";
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    //
    protected $guarded = [

    ];

    function Product()
    {
        return $this->hasOne(Product::class);
    }
}

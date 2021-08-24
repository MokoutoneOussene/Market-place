<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded = [];

    function category()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    function achat()
    {
        return $this->hasOne(Achat::class);
    }
}

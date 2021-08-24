<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    //
    protected $guarded = [

    ];

    function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class, 'fournisseur_id');
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}

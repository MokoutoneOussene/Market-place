<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    //
    protected $guarded = [
        
    ];

    function achat()
    {
        return $this->hasOne(Achat::class);
    }
}

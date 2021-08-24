<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $guarded = [

    ];

    function vente()
    {
        return $this->hasOne(Vente::class, 'client_id');
    }
}


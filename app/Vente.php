<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    //
    protected $guarded = [

    ];

    function product()
    {
        return $this->belongsTo(Product::class);
    }

    function client()
    {
        return $this->belongsTo(Client::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}

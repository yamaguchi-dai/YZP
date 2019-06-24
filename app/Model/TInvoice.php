<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TInvoice extends Model
{
    function detail(){
        return $this->hasMany(TInvoice::class);
    }
}

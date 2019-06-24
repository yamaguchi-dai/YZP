<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TDelivery extends Model
{
    function detail(){
        return $this->hasMany(TDeliveryDetail::class);
    }
}

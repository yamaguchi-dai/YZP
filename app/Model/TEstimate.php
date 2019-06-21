<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TEstimate extends Model
{
    function detail(){
        return $this->hasMany(TEstimateDetail::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    public function citycorporation(){
        return $this->belongsTo(Citycorporation::class);
    }
    public function municipality(){
        return $this->belongsTo(Municipality::class);
    }
}

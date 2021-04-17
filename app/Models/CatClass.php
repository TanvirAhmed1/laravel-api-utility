<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatClass extends Model
{
    public function catkingdom(){
        return $this->belongsTo(CatKingdom::class);
    }
    public function catorder(){
        return $this->hasMany(CatOrder::class);
    }
}

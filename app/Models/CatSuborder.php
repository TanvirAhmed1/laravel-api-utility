<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatSuborder extends Model
{
    public function catorder(){
        return $this->belongsTo(CatOrder::class);
    }
    public function catfamily(){
        return $this->hasMany(CatFamily::class);
    }
}

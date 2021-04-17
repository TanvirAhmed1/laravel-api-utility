<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatFamily extends Model
{
    public function catsuborder(){
        return $this->belongsTo(CatSuborder::class);
    }
    public function catgenus(){
        return $this->hasMany(CatGenus::class);
    }
}

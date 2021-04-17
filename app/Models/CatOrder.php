<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatOrder extends Model
{
    public function catclass(){
        return $this->belongsTo(CatClass::class);
    }
    public function catsuborder(){
        return $this->hasMany(CatSuborder::class);
    }
}

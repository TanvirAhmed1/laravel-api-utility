<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatKingdom extends Model
{
    public function catdomain(){
        return $this->belongsTo(CatDomain::class);
    }
    public function catclass(){
        return $this->hasMany(CatClass::class);
    }
}

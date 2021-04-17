<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatDomain extends Model
{
//    public function subdistrict(){
//        return $this->belongsTo(Subdistrict::class);
//    }
    public function catkingdom(){
        return $this->hasMany(CatKingdom::class);
    }
}

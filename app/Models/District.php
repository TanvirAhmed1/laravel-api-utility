<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function division(){
        return $this->belongsTo(Division::class);
    }
    public function subdistrict(){
        return $this->hasMany(Subdistrict::class);
    }
    public function citycorporation(){
        return $this->hasMany(Citycorporation::class);
    }
}

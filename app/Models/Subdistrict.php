<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subdistrict extends Model
{
    public function district(){
        return $this->belongsTo(District::class);
    }
    public function unioncouncil(){
        return $this->hasMany(Unioncouncil::class);
    }
    public function municipality(){
        return $this->hasMany(Municipality::class);
    }
}

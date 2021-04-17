<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Citycorporation extends Model
{
    public function district(){
        return $this->belongsTo(District::class);
    }
    public function ward(){
        return $this->hasMany(Ward::class);
    }
}

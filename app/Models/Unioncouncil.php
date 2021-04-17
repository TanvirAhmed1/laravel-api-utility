<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unioncouncil extends Model
{
    public function subdistrict(){
        return $this->belongsTo(Subdistrict::class);
    }
    public function villages(){
        return $this->hasMany(Village::class);
    }
}

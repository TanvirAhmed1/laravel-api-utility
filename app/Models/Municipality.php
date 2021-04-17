<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    public function subdistrict(){
        return $this->belongsTo(Subdistrict::class);
    }
    public function wards(){
        return $this->hasMany(Ward::class);
    }
}

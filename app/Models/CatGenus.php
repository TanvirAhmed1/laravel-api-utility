<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatGenus extends Model
{
    public function catfamily(){
        return $this->belongsTo(CatFamily::class);
    }
}

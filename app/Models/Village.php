<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    public function unioncouncil(){
        return $this->belongsTo(Unioncouncil::class);
    }
}

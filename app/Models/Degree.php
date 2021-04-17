<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    //
    public function education() {
        return $this->belongsTo('App\Models\Education');
    }

    public function institute() {
        return $this->hasOne('App\Models\Institute');
    }
}

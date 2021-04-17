<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institute extends Model
{
    //
    public function degree() {
        return $this->belongsTo('App\Models\Degree');
    }
}

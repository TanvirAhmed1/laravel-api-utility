<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //
    public function contact() {
        return $this->belongsTo('App\Models\Contact');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    //
    public function contact() {
        return $this->belongsTo('App\Models\Contact');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    //
    public function contact() {
        return $this->belongsTo('App\Models\Contact');
    }
}

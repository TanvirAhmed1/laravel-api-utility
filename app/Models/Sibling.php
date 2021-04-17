<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sibling extends Model
{
    //
    public function bio() {
        return $this->belongsTo('App\Models\Bio');

        // If multiple clients (for example brother and/or sister) have the same child
        // return $this->belongsToMany('App\Models\Bio');
    }
}

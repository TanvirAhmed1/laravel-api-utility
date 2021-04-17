<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    //
    public function bio() {
        return $this->belongsTo('App\Models\Bio');

        // If multiple clients (for example father and mother) have the same child
        // return $this->belongsToMany('App\Models\Bio');
    }
}

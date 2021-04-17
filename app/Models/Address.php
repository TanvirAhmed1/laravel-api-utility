<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //
    public function contact() {
        return $this->belongsTo('App\Models\Contact');

        // If multiple clients (for example father and offspring) have the same address
        // return $this->belongsToMany('App\Models\Contact');
    }

    public function organization() {
        return $this->belongsTo('App\Models\Organization');
    }
}

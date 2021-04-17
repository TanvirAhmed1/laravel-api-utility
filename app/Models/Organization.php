<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    //
    public function occupation() {
        return $this->belongsTo('App\Models\Occupation');
    }

    public function address() {
        return $this->hasOne('App\Models\Address');
    }

//    public function contacts() {
//        return $this->hasMany('App\Models\Contact');
//    }
}

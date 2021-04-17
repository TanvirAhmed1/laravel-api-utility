<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    //
    public function contact() {
        return $this->belongsTo('App\Models\Contact');
    }

    public function siblings() {
        return $this->hasMany('App\Models\Sibling');
    }

    public function children() {
        return $this->hasMany('App\Models\Children');
    }
}

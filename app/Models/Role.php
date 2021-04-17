<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function users() {
        return $this->hasMany('App\Models\User');
    }
}

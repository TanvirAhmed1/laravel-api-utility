<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    public function lead(){
        return $this->belongsTo(Lead::class);
    }
    public function contact(){
        return $this->belongsTo(Contact::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    public function bio() {
        return $this->belongsTo(Bio::class);
    }
}

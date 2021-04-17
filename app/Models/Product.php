<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function feature() {
        return $this->hasOne(ProductFeature::class);
    }
}

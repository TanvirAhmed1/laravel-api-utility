<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    public function bio() {
        return $this->hasOne(Bio::class);
    }

    public function education() {
        return $this->hasMany(Education::class);
    }

    public function experience() {
        return $this->hasMany(Experience::class);
    }

    public function occupations() {
        return $this->hasMany(Occupation::class);
    }

    public function skill() {
        return $this->hasMany(Skill::class);
    }

    public function address() {
        return $this->hasMany(Address::class);
    }

    public function referee() {
        return $this->hasMany(Referee::class);
    }
    public function property(){
        return $this->hasMany(Property::class);
    }
}

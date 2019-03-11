<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entitie extends Model
{
    public function students(){
        return $this->hasMany('App\Models\Student');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}

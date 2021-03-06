<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    public function entitie(){
        return $this->belongsTo('App\Models\Entitie');
    }

    public function institution(){
        return $this->belongsTo('App\Models\Institution');
    }
}

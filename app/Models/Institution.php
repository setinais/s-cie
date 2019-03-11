<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institution extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','description','email','phone','site','status','street','sector','city','complement',
    ];

    public function students(){
        return $this->hasMany('App\Models\Student');
    }
}

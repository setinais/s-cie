<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    //
    protected $fillable = [
        'name','description','email','phone','site','status','street','sector','city','complement',
    ];
}

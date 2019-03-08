<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Institution;

class InstituicaoController extends Controller
{
    //
    public function getInstituicao(){
    	$inst = Institution::all();
    	return $inst;
    }
}

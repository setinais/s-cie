<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UsuarioController extends Controller
{
    //
    public function getUser(){
    	$users = User::where('role','!=', 'Admin')->get();
    	return $users;
    }

    public function liberarBloquearUser(Request $request, $id){
    	$user = User::find($id);
    	if($user->status === 1){
    		$user->status = 0;
    	}else{
    		$user->status = 1;
    	}
    	$user->save();
    	return $user;
    }
}

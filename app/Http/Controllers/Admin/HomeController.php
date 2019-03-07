<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //

    public function index(){
        if(Auth::user()->role != 'Admin')
            return redirect()->route('home');
        return view('admin.adminhome');
    }
}

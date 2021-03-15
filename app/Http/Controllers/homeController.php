<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function welcome(){
        return view('login');
    }
    public function inscription(){
        return view('inscription');
    }
}

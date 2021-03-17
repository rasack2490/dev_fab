<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin');
    }
    public function listeDev(){
        $devs = DB::select('select nom, prenom, email, matricule from users where registed =1 AND role=0');
        return view('admin_links.dev',['devs'=>$devs]);
    }
    public function dash(){
        $userCount = DB::select('select count(*) as place from users where registed =?', [true]);
        $places = 50;
        $places= $places-$userCount[0]->place;
        $days = DB::select('select * from days');
        return view('admin_links.dash',['places' => $places, 'days' =>$days,]);
    }

    public function devAccept(){
        $dev_accept = DB::select('select nom, prenom, email, matricule from users where registed =0 AND role=0');
        return view('admin_links.dev_accept', ['dev_accept'=>$dev_accept]);
    }



}

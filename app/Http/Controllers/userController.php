<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function reserve(Request $request){
        $request->validate([
            'jour'=>'required',
            'heure'=>'required'
        ]);
        $data=[
            $request->input('jour'),
            $request->input('heure')
        ];
        $day_reser = DB::select('select id_day from days where jours=?',[$data[0]]);
        $heur_reser = DB::select('select id_horaire from horaires where heur_reserve=?',[$data[1]]);
        //$user_reser = DB::select('select id_user from users where email=?',[Session::get('email')]);
        $reserved = false;
        
        DB::insert('insert into reservations (reser_email, reser_horaire, reser_day, reserved) values (?, ?, ?, ?)', [Session::get('email'),$heur_reser[0]->id_horaire,$day_reser[0]->id_day,$reserved]);
        return redirect()->route('developpeur');
    }
}

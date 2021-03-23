<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;


class AdminController extends Controller
{
    //
    public function index(){
        return view('admin');
    }
    public function listeDev(){
        $devs = DB::select('select nom, prenom, email, matricule, numero from users where registed =1 AND role=0');
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
        $dev_accept = DB::select('select nom, prenom, email, matricule, numero from users where registed =0 AND role=0');
        return view('admin_links.dev_accept', ['dev_accept'=>$dev_accept]);
    }

    public function supprime(Request $request){
        $email = $request->input('email');
        $del = DB::delete('delete from users where email=?',[$email]);
        $details = [
            'title' =>'Devs Web Fab',
            'body' => 'Salut cher utilisateur vous avez ete supprimer de notre base de donnee, pour nous excuser nous vous offrons un rdv a la perle '
        ];
        Mail::to($email)->send(new \App\Mail\sendmail($details));
        return redirect()->route('dev');
    }

    public function accept(Request $request){
        $email = $request->input('validate');
        DB::update('update users set registed = 1 where email = ?', [$email]);
        $details = [
            'title' =>'Devs Web Fab',
            'body' => 'Votre inscription a ete valider veuillez vous connecter avec ce lien. http://127.0.0.1:8000/ '
        ];
        Mail::to($email)->send(new \App\Mail\sendmail($details));
        return redirect()->route('devAccept');
    }

    public function decline(Request $request){
        $email = $request->input('refuse');
        $del = DB::delete('delete from users where email=?',[$email]);
        return redirect()->route('devAccept');
    }

    public function program(){
        return view('admin_links.parametre');
    }
    public function horaire(Request $request){
        $data = [
            $request->input('matin'),
            $request->input('soir')
        ];
        DB::update("update horaires set heur_reserve='$data[0]' where id_horaire = 1");
        DB::update("update horaires set heur_reserve='$data[1]' where id_horaire = 2");
        $alert= '<script>alert(<h3 class="text-success">Enregister avec succès</h3>)</script>';
        return redirect()->route('parametre')->with($alert);
    }
    public function modiplace(Request $request){
        $data = [
            $request->input('jour'),
            $request->input('place')
        ];
        DB::update("update days set places='$data[1]' where jours = ?",[$data[0]]);
        return redirect()->route('parametre');
    }
    public function showprofile(){
      $info =  DB::select('select * from users where email=?',[Session::get('email')]);
      return view('admin_links.profile',['info'=>$info]);
    }
    public function reserve(){
        $reserve =  DB::select('SELECT reser_email, heur_reserve, jours FROM reservations INNER JOIN horaires ON reservations.reser_horaire = horaires.id_horaire INNER JOIN days ON reservations.reser_day = days.id_day');
        
        return view('admin_links.reservation',['reserve'=>$reserve]);
    }
}

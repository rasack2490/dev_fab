<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\utilisateur;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    //

    public function dev(){
        return view('/developpeur');
    }
   

    public function authentificate(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $inputs = [
            $request->input('email'),
            $request->input('password')
        ];
        $credentials = $request->only('email', 'password');

        $userCount = DB::select('select count(*) as place from users where registed =?', [true]);
        $places = 50;
        $places= $places-$userCount[0]->place;
        $days = DB::select('select * from days');



        $devs = DB::select('select nom, prenom, email, matricule, numero from users where registed =1 AND role=0');

        if (Auth::attempt($credentials)) {
           // $is_registed = DB::select('select registed, role  from users where email=? AND password=?',$inputs);
           $results = DB::select('select registed, role from users where email =?', [$inputs[0]]);

            if($results[0]->registed==true && $results[0]->role== true){
            return view('/admin_links.dash',['places' => $places, 'days' =>$days, 'devs'=>$devs, ])->with($inputs);
            }
            if($results[0]->registed==true && $results[0]->role== false){
                return redirect('/developpeur')->with($inputs);
            }
            if($results[0]->registed==false && $results[0]->role== false){
                return redirect('/attente')->with($inputs);
            }
        }

        return redirect('/')->with('error', 'Oppes! vous avez entre des informations invalide');

    }
    public function inscrit(Request $request){
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'matricule' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'numero'=> 'required|string',
            'password' => 'required|string',
        ]);

        $role = false;
        $registed = false;
        $data = [
            $request->input('nom'),
            $request->input('prenom'),
            $request->input('email'),
            $pass = bcrypt($request->input('password')),
            $request->input('matricule'),
            $request->input('numero'),
            $role,
            $registed

        ];
        $resultat = DB::insert('insert into users (nom, prenom, email, password, matricule, numero, role, registed) values (?, ?, ?, ?, ?, ?, ?, ?)', $data);
        return view('login');

        //$results = DB::select('select email from users where email =?', [$data[2]]);

    }
    public function admin(){
        return view('admin');
    }
}

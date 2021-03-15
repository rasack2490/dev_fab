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
            
            
        if (Auth::attempt($credentials)) {
           // $is_registed = DB::select('select registed, role  from users where email=? AND password=?',$inputs);
           $results = DB::select('select registed, role from users where email =?', [$inputs[0]]);
            print_r($results);
            if($results[0]->registed==true && $results[0]->role== true){ 
            return view('/admin')->with($inputs);
            }
            if($results[0]->registed==false && $results[0]->role== false){
                return view('/developpeur')->with($inputs);
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
            $role,
            $registed

        ];
        $resultat = DB::insert('insert into users (nom, prenom, email, password, matricule, role, registed) values (?, ?, ?, ?, ?, ?, ?)', $data);
        return view('login');
        
        //$results = DB::select('select email from users where email =?', [$data[2]]);
        
    }
    public function admin(){
        return view('admin');
    }
}

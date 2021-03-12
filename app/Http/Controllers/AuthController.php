<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin');
        }

        return redirect('/')->with('error', 'Oppes! vous avez entre des informations invalide');

    }

    public function admin(){
        return view('admin');
    }
}

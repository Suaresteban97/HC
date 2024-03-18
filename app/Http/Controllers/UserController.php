<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        return view("login");
    }

    public function login(Request $request){
        
        $data = $request->all();

        $user = User::where("email", $request->user)
        ->orWhere("name", $request->user)->first();

        if(isset($user)){
            if ($request->password == $user["password"]) {

                Auth::login($user);
                return redirect()->route('index')->with('success', 'Sesión iniciada');

            } else {
                return redirect()->route('login')->with('error', 'Contraseña incorrecta');
            }
        } else {
            return redirect()->route('login')->with('error', 'Usuario incorrecto');
        }       
    }

    public function logout () {
        Session::flush();

        Auth::logout();

        return redirect()->route('login')->with('success', 'Sesión cerrada');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function login(){
        //si ya estas autentificado ya no te deja entrar a login
        if (Auth::check()) {
            return redirect()->route('inicio');
        }
        return view('modules/auth/login');
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('login');     
    }
    public function logear(Request $request){
        $credenciales = $request->only("name", "password");
        if (Auth::attempt($credenciales)) {
            return redirect()->route('inicio');
        } else {
            return back()->withInput($credenciales);
        }
    } 
    public function agregarUsuario(){
        $item = new User();
        $item->name = 'yamilet';
        $item->password = Hash::make('1234');
        $item->save();
        return $item;
    }
}

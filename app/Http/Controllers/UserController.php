<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registro(){
        return view('Users.registro');
    }

    public function create(Request $request){
        #return $request;
        $request->validate([
            'nombre'=>'required',
            'correo'=>'required|email',
            'contraseña'=>'required',
            'tipo'=>'required',
        ]);
        User::create([
            'name' => $request->nombre,
            'rol'=>$request->tipo,
            'email' => $request->correo,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect()->route('home');
    }
}

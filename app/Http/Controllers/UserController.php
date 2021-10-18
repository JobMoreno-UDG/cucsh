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
        $request->validate([
            'nombre'=>'required',
            'correo'=>'required|email',
            'contraseña'=>'required|min:8',
            'tipo'=>'required',
        ]);
        return User::create([
            'name' => $request->nombre,
            'email' =>$request->correo,
            'password' => Hash::make($request->contraseña),
            'rol'=>$request->tipo,
        ]);
    }
}

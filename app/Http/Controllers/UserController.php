<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Prestamos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function registro()
    {
        return view('Users.registro');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'tipo' => 'required',
        ]);
        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->rol = $request->tipo;
        $usuario->save();
        return redirect()->route('home');
    }
    public function index()
    {
        $usuarios = User::paginate(15);
        return view('Users.index', compact('usuarios'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);
        $usuarios = User::where('name', 'LIKE', '%' . $request->nombre . '%')->get();
        return view('Users.plantilla', compact('usuarios'));
    }
}

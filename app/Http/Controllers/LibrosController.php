<?php

namespace App\Http\Controllers;
use App\Models\Libros;

use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index(){
        $libros = Libros::paginate(5);
        return view('Libros.index',compact('libros'));
    }
    public function show($libro){
        $libro = Libros::where('clasificacion',$libro)->get()[0];
        return view('Libros.show',compact('libro'));

    }
}

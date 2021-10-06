<?php

namespace App\Http\Controllers;
use App\Models\Revistas;
use App\Models\Informacion;
use Illuminate\Http\Request;

class RevistasController extends Controller
{
    public function index(){
        $revista = Revistas::paginate(10);
        return view('Revistas.index',compact('revista'));
    }
    public function show($revista)
    {
        $info = Informacion::where('clasificacion',$revista)->get()[0];
        $revista = Revistas::where('clasificacion',$revista)->get()[0];
        return view('Revistas.show',compact('revista','info'));
    }
}
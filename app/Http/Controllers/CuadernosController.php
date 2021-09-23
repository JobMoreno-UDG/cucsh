<?php

namespace App\Http\Controllers;

use App\Models\Cuadernos;
use App\Models\Informacion;
use Illuminate\Http\Request;

class CuadernosController extends Controller
{
    public function index(){
        $cuadernos = Cuadernos::paginate(5);
        return view('Cuadernos.index',compact('cuadernos'));
    }

    public function show($clasificacion){
        $info = Informacion::where('clasificacion',$clasificacion)->get()[0];
        $cuaderno = Cuadernos::where('clasificacion','=',$clasificacion)->get()[0];
        return view('Cuadernos.show',compact('cuaderno','info'));
    }
    public function edit($clasificacion){
        $info = Informacion::where('clasificacion',$clasificacion)->get()[0];
        $cuaderno = Cuadernos::where('clasificacion','=',$clasificacion)->get()[0];
        return view('Cuadernos.edit',compact('cuaderno','info'));
    }
}

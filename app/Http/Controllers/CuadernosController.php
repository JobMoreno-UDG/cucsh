<?php

namespace App\Http\Controllers;

use App\Models\Cuadernos;
use App\Models\Informacion;
use Illuminate\Http\Request;

class CuadernosController extends Controller
{
    public function index(){
        $cuadernos = Cuadernos::paginate();
        return view('Cuadernos.index',compact('cuadernos'));
    }

    public function show($clasificacion){
        $info = Informacion::where('clasificacion',$clasificacion)->where('tipo','Cuadernos')->get();
        $cuaderno = Cuadernos::where('clasificacion','=',$clasificacion)->get();
        $info = $info[0];
        $cuaderno = $cuaderno[0];
        return view('Cuadernos.show',['cuaderno'=>$cuaderno,'info'=>$info]);
    }
}

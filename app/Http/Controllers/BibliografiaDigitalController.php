<?php

namespace App\Http\Controllers;

use App\Models\BibliografiaDigital;
use Illuminate\Http\Request;

class BibliografiaDigitalController extends Controller
{
    public function index(){
        $bibliografia = BibliografiaDigital::paginate(10);
        return view('BibliografiaDigital.index',compact('bibliografia'));
    }
    public function show($clasificacion){
        $bibliografia = BibliografiaDigital::where('clasificacion',$clasificacion)->get();
        return view('BibliografiaDigital.show',['bibliografia'=>$bibliografia[0]]);
    }
    public function edit($clasificacion){
        $bibliografia = BibliografiaDigital::where('clasificacion',$clasificacion)->get()[0];
        return view('BibliografiaDigital.edit',compact('bibliografia'));
    }

    public function buscar(Request $clasificacion){
        return $clasificacion;
    }

    public function registro(){
        return view('BibliografiaDigital.create');
    }
    public function create(Request $request){
        $request->validate([
            'titulo'=>'required',
            'autor'=>'required',
            'clasificacion'=>'required',
            'anio'=>'required',
        ]);

        $bibliografia = new BibliografiaDigital();

        $bibliografia->titulo = $request->titulo;
        $bibliografia->autor = $request->autor;
        $bibliografia->clasificacion = $request->clasificacion;
        $bibliografia->anio = $request->anio;

        $bibliografia->save();
        return redirect()->route('bibliografia_digital.index');
    }
    public function update(Request $request){
        $request->validate([
            'titulo'=>'required',
            'clasificacion'=>'required',
        ]);
        BibliografiaDigital::where('clasificacion',$request->clasificacion)->update(
            ['clasificacion'=> $request->clasificacion,
            'titulo'=>$request->titulo,
            'autor'=>$request->autor,
            'anio'=> $request->anio]);

        return redirect()->route('bibliografia_digital.index');
    }
}

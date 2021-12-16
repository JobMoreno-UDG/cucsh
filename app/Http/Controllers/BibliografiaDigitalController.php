<?php

namespace App\Http\Controllers;

use App\Models\BibliografiaDigital;
use Illuminate\Http\Request;
use App\Exports\BibliografiaExport;
use Maatwebsite\Excel\Facades\Excel;


class BibliografiaDigitalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $bibliografia = BibliografiaDigital::paginate(10);
        $total = count(BibliografiaDigital::all());
        return view('BibliografiaDigital.index',compact('bibliografia','total'));
    }
    public function show($clasificacion){
        $bibliografia = BibliografiaDigital::where('clasificacion',$clasificacion)->get();
        return view('BibliografiaDigital.show',['bibliografia'=>$bibliografia[0]]);
    }
    public function edit($clasificacion){
        $bibliografia = BibliografiaDigital::where('clasificacion',$clasificacion)->get()[0];
        return view('BibliografiaDigital.edit',compact('bibliografia'));
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

    public function delete($clasificacion){
        BibliografiaDigital::where('clasificacion',$clasificacion)->delete();
        return redirect()->route('bibliografia_digital.index');
    }

    public function buscar(Request $request){
        $request->validate([
            'buscar' => 'required',
            'buscar_por' => 'required',
        ]);

        $bibliografia = BibliografiaDigital::where($request->buscar_por,'LIKE','%'.$request->buscar.'%')->get();
        $total = count($bibliografia);
        return view('BibliografiaDigital.buscar',compact('bibliografia','total'));
    }

    public function export()
    {
        return Excel::download(new BibliografiaExport, 'bibliogarfia.xlsx');
    }

}

<?php

namespace App\Http\Controllers;
use App\Models\Libros;
use App\Models\Informacion;

use Illuminate\Http\Request;

class LibrosController extends Controller
{
    public function index(){
        $libros = Libros::paginate(10);
        return view('Libros.index',compact('libros'));
    }
    public function show($clasificacion){
        $libro = Libros::where('clasificacion',$clasificacion)->get()[0];
        $info = Informacion::where('clasificacion',$clasificacion)->get()[0];
        return view('Libros.show',compact('libro','info'));

    }
    public function registro(){
        return view('Libros.create');
    }
    public function edit($clasificacion)
    {
        $info = Informacion::where('clasificacion', $clasificacion)->get()[0];
        $cuaderno = Libros::where('clasificacion', '=', $clasificacion)->get()[0];
        return view('Libros.edit', compact('cuaderno', 'info'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'clasificacion' => 'required',
            'fecha_ingreso'=>'required',
        ]);
        $libro = new Libros();

        $info = new Informacion();

        $libro->titulo = $request->titulo ;
        $libro->autor = $request->autor ?? '';
        $libro->clasificacion = $request->clasificacion;
        $libro->anio = $request->anio ?? 0000;
        $libro->editorial = $request->editorial ?? '';
        $libro->lugar_publicacion = $request->lugar_publicacion ?? '';
        $libro->volumen = $request->volumen ?? '';
        $libro->fecha_ingreso = str_replace(' 00:00:00', '',$request->fecha_ingreso);
        $libro->situacion = $request->situacion ?? '';
        $libro->tomo_numero = $request->tomo_numero ?? '';
        $libro->paginas = $request->paginas ?? 0;
        $libro->serie = $request->serie ?? '';
        $libro->isbn_issn = $request->isbn_issn ?? '';

        $info->clasificacion = $request->clasificacion;
        $info->tipo = 'Libros';
        $info->obtencion = $request->obtencion ?? '';
        $info->resguardo = $request->resguardo ?? '';
        $info->contenido = $request->contenido ?? '';
        $info->codigo_barras = $request->codigo_barras ?? 0;
        $info->inventario = $request->inventario ?? '';
        $info->space  = $request->space ?? '';
        $info->fecha_publicacion = $request->fecha_publicacion ?? 0000;

        $libro->save();
        $info->save();

        return redirect()->route('libros.index');

    }
}

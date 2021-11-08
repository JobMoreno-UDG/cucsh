<?php

namespace App\Http\Controllers;

use App\Models\Prestamos;
use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $prestamos = Prestamos::paginate(10);
        return view('Prestamos.index',compact('prestamos'));
    }
    public function registro($tipo,$clasificacion){
        return view('Prestamos.create',compact('tipo','clasificacion'));
    }
    public function create(Request $request){
        $request->validate([
            'fecha_prestamo'=>'required',
            'nombre'=>'required',
            'email' => 'required',
        ]);
        $prestamo = new Prestamos();
        $prestamo->clasificacion = $request->calsificacion;
        $prestamo->tipo = $request->tipo;
        $prestamo->fecha_prestamo = $request->fecha_prestamo;
        $prestamo->prestado_A = $request->nombre;
        $prestamo->correo = $request->email;
        $prestamo->save();
        return redirect()->route('prestamos.index');
    }

    public function cerrar_prestamo($clasificaicon,$tipo,$fecha){
        Prestamos::where('clasificacion',$clasificaicon)->where('tipo',$tipo)->where('fecha_prestamo',$fecha)->update([
            'status'=>'Cerrado',
            'fecha_entrega' => now(),
        ]);
        return redirect()->route('prestamos.index');
    }
}

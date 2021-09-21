<?php

namespace App\Http\Controllers;

use App\Models\BibliografiaDigital;
use Illuminate\Http\Request;

class BibliografiaDigitalController extends Controller
{
    public function index(){
        $bibliografia = BibliografiaDigital::paginate(5);
        return view('BibliografiaDigital.index',compact('bibliografia'));
    }
    public function show($bibliografia){
        $bibliografia = BibliografiaDigital::where('clasificacion',$bibliografia)->get();
        return view('BibliografiaDigital.show',['bibliografia'=>$bibliografia[0]]);
    }
}

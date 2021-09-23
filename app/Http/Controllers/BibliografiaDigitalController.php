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
    public function edit($bibliografia){
        $bibliografia = BibliografiaDigital::where('clasificacion',$bibliografia)->get()[0];
        return view('BibliografiaDigital.edit',compact('bibliografia'));
    }
}

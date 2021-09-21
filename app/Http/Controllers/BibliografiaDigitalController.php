<?php

namespace App\Http\Controllers;

use App\Models\BibliografiaDigital;
use Illuminate\Http\Request;

class BibliografiaDigitalController extends Controller
{
    public function index(){
        $bibliografia = BibliografiaDigital::paginate();
        return view('BibliografiaDigital.index',compact('bibliografia'));
    }
}

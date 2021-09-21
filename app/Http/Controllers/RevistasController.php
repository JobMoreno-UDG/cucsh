<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RevistasController extends Controller
{
    public function index(){
        return view('Revistas.index');
    }
}

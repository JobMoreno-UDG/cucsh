<?php

use App\Http\Controllers\BibliografiaDigitalController;
use App\Http\Controllers\CuadernosController;
use App\Http\Controllers\RevistasController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('inicio');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

# Rutas de bibliografia Digital
Route::get('bibliogarfia_digital',[BibliografiaDigitalController::class,'index'])->name('bibliografia_digital.index');
Route::get('bibliogarfia_digital/{bibliogarfia_digital}',[BibliografiaDigitalController::class,'show'])->name('bibliografia_digital.show');

# Rutas de Caudernos
Route::get('cuadernos',[CuadernosController::class,'index'])->name('cuadernos.index');
Route::get('cuadernos/{cuaderno}',[CuadernosController::class,'show'])->name('cuadernos.show');

#Rutas Revistas

Route::get('revistas',[RevistasController::class,'index'])->name('revistas.index');
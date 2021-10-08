<?php

use App\Http\Controllers\BibliografiaDigitalController;
use App\Http\Controllers\CuadernosController;
use App\Http\Controllers\RevistasController;
use App\Http\Controllers\LibrosController;
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

Route::get('/', function () {return view('welcome');})->name('inicio');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


# Rutas de bibliografia Digital

Route::get('bibliografia_digital',[BibliografiaDigitalController::class,'index'])->name('bibliografia_digital.index');
Route::get('bibliografia_digital/{bibliogarfia}',[BibliografiaDigitalController::class,'show'])->name('bibliografia_digital.show');
Route::get('bibliografia_digital/{bibliografia}/edit',[BibliografiaDigitalController::class, 'edit'])->name('bibliografia_digital.edit');

Route::get('bibliografia/registro',[BibliografiaDigitalController::class,'registro'])->name('bibliografia_digital.registro');
Route::post('bibliografia/create',[BibliografiaDigitalController::class,'create'])->name('bibliografia_digital.create');

# Rutas de Caudernos

Route::get('cuadernos',[CuadernosController::class,'index'])->name('cuadernos.index');
Route::get('cuadernos/{cuaderno}',[CuadernosController::class,'show'])->name('cuadernos.show');
Route::get('cuadernos/{cuaderno}/edit',[CuadernosController::class,'edit'])->name('cuadernos.edit');

Route::get('cuaderno/registro/',[CuadernosController::class,'registro'])->name('cuadernos.registro');
Route::post('cuaderno/create',[CuadernosController::class,'create'])->name('cuadernos.create');

/*
Route::get('cuadernos/formulario_registro', array(
    'as' => 'registro',
    'middleware' => 'web',
    'uses' => 'App\Http\Controllers\CuadernosController@store'
));
*/

#Rutas Revistas

Route::get('revistas',[RevistasController::class,'index'])->name('revistas.index');
Route::get('revistas/{revista}',[RevistasController::class,'show'])->name('revistas.show');
Route::get('revistas/{revista}/edit',[RevistasController::class,'show'])->name('revistas.edit');

#Rutas Libros

Route::get('libros',[LibrosController::class,'index'])->name('libros.index');
Route::get('libros/{libro}',[LibrosController::class,'show'])->name('libros.show');
Route::get('libros/{libro}/edit',[LibrosController::class,'edit'])->name('libros.edit');

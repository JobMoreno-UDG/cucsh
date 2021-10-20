<?php

use App\Http\Controllers\BibliografiaDigitalController;
use App\Http\Controllers\CuadernosController;
use App\Http\Controllers\RevistasController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PrestamosController;
use App\Http\Controllers\UserController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


# Rutas de bibliografia Digital

Route::get('bibliografia_digital',[BibliografiaDigitalController::class,'index'])->name('bibliografia_digital.index');

Route::get('bibliografia_digital/{bibliografia}/edit',[BibliografiaDigitalController::class, 'edit'])->name('bibliografia_digital.edit');
Route::get('bibliografia/registro',[BibliografiaDigitalController::class,'registro'])->name('bibliografia_digital.registro');
Route::post('bibliografia_digital/create',[BibliografiaDigitalController::class,'create'])->name('bibliografia_digital.create');
Route::post('bibliografia_digital/update',[BibliografiaDigitalController::class,'update'])->name('bibliografia_digital.update');
Route::get('bibliografia/{bibliografia}/delete',[BibliografiaDigitalController::class,'delete'])->name('bibliografia_digital.delete');

Route::get('bibliografia_digital/{bibliogarfia}',[BibliografiaDigitalController::class,'show'])->name('bibliografia_digital.show');
Route::post('bibliografia_digital/buscar',[BibliografiaDigitalController::class,'buscar'])->name('bibliografia_digital.buscar');


# Rutas de Caudernos

Route::get('cuadernos',[CuadernosController::class,'index'])->name('cuadernos.index');
Route::get('cuadernos/{cuaderno}',[CuadernosController::class,'show'])->name('cuadernos.show');
Route::get('cuadernos/{cuaderno}/edit',[CuadernosController::class,'edit'])->name('cuadernos.edit');

Route::get('cuaderno/registro/',[CuadernosController::class,'registro'])->name('cuadernos.registro');
Route::post('cuaderno/create',[CuadernosController::class,'create'])->name('cuadernos.create');
Route::post('cuadernos/update/{clasificacion}',[CuadernosController::class,'update'])->name('cuadernos.update');
Route::get('cuadernos/{cuaderno}/delete',[CuadernosController::class,'delete'])->name('cuadernos.delete');

Route::post('cuadernos/busqueda',[CuadernosController::class,'buscar'])->name('cuadernos.buscar');
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
Route::get('revistas/{revista}/edit',[RevistasController::class,'edit'])->name('revistas.edit');


Route::get('revista/registro',[RevistasController::class,'registro'])->name('revistas.registro');
Route::post('revistas/create',[RevistasController::class,'create'])->name('revistas.create');
Route::get('revistas/{revista}/delete',[RevistasController::class,'delete'])->name('revistas.delete');
Route::post('revistas/buscar',[RevistasController::class,'buscar'])->name('revistas.buscar');
Route::post('revistas/update',[RevistasController::class,'update'])->name('revistas.update');

#Rutas Libros

Route::get('libros',[LibrosController::class,'index'])->name('libros.index');
Route::get('libros/{libro}',[LibrosController::class,'show'])->name('libros.show');
Route::get('libros/{libro}/edit',[LibrosController::class,'edit'])->name('libros.edit');

Route::get('libro/registro',[LibrosController::class,'registro'])->name('libro.registro');
Route::post('libros/create',[LibrosController::class,'create'])->name('libros.create');
Route::post('libros/update/{clasificacion}',[LibrosController::class,'update'])->name('libros.update');
Route::get('libros/{libro}/delete',[LibrosController::class,'delete'])->name('libros.delete');

Route::post('libros/buscar',[LibrosController::class,'buscar'])->name('libros.buscar');

Auth::routes();

# Registro usuarios

Route::get('usuarios/registro',[UserController::class,'registro'])->name('usuario.registro');
Route::post('usuarios/create',[UserController::class,'create'])->name('usuario.create');
Route::get('usuarios/index',[UserController::class,'index'])->name('usuario.index');


# Prestamos

Route::get('prestamos',[PrestamosController::class,'index'])->name('prestamos.index');
Route::get('prestamos/{tipo}/{clasificacion}/registro',[PrestamosController::class,'registro'])->name('prestamos.registro');
Route::post('prestamos/create',[PrestamosController::class,'create'])->name('prestamos.create');
Route::get('prestamos/{tipo}/{clasificacion}/{fecha_presatdo}/cerrar',[PrestamosController::class,'cerrar_prestamo'])->name('prestamos.cerrar');

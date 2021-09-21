<?php

use App\Http\Controllers\BibliografiaDigitalController;
use App\Http\Controllers\CuadernosController;
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

Route::get('bibliogarfia_digital',[BibliografiaDigitalController::class,'index'])->name('bibliografia_digital.index');

Route::get('cuadernos',[CuadernosController::class,'index'])->name('cuadernos.index');
Route::get('cuadernos/{cuaderno}',[CuadernosController::class,'show'])->name('cuadernos.show');

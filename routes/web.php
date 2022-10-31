<?php

use App\Http\Controllers\BuscarController;
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
//ruta de la vista principal en donde tenemos el formulario para la busqueda de la informacion de la base de datos
Route::get('/', function () {return view('principal');})->name('/');
//
Route::get('/buscar',[BuscarController::class, 'index'])->name('buscar.index');




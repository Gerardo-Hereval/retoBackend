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

Route::get('/', function () {return view('principal');})->name('/');

Route::get('/api/zip_code',[BuscarController::class, 'index'])->name('api');
Route::post('/api/zip_code',[BuscarController::class, 'store'])->name('api');


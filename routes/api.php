<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//si bien, no ocuparemos este contralador, se deja para futuras modificaciones o mejores del api en el que incluyan una validación
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//aqui llamamos a url mediante Route model binding y se le coloca un apodo por si es necesario cambiar la estructura de la url no sea necesario modificar el demas codigo
Route::get('/zip_codes/{zip_code}',[ApiController::class,'index'])->name('api');

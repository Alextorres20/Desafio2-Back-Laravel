<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\DiosController;
use App\Http\Controllers\CaracteristicasController;
use App\Http\Controllers\PruebasController;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::post('crearUsuarios',[DiosController::class, 'crearUsuarios'])->middleware('midCrearHumanos');
});

Route::controller(RegistroController::class)->group(function (){
    Route::post('registrar', 'registrar');
    Route::get('verificar/{id}', 'verificar');
    Route::post('iniciarSesion','iniciarSesion');
    Route::post('cerrarSesion','cerrarSesion');
});


Route::resource('pruebas', PruebasController::class)->middleware('auth:sanctum', 'midCrearPruebas');

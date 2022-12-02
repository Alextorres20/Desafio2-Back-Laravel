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
    // Alejandro
    Route::post('crearUsuarios',[DiosController::class, 'crearUsuarios'])->middleware('midCrearHumanos');
    Route::put('matarUnUsuario',[DiosController::class, 'matarUnUsuario'])->middleware('midMatarUsuarios');
    Route::put('matarUsuarios',[DiosController::class, 'matarUsuarios'])->middleware('midMatarUsuarios');

});
//Alejandro
Route::controller(RegistroController::class)->group(function (){
    Route::post('registrar', 'registrar');
    Route::get('verificar/{id}', 'verificar');

    Route::post('iniciarSesion','iniciarSesion');
    Route::post('cerrarSesion','cerrarSesion');
});

// Route::controller(CaracteristicasController::class)->group(function (){
//     Route::post('asignarCaracteristicas/{id}', 'asignarCaracteristicas');
// });
//Alicia
Route::resource('pruebas', PruebasController::class)->middleware('auth:sanctum', 'midCrearPruebas');

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
    Route::post('crearUsuarios',[DiosController::class, 'crearUsuarios'])->middleware('midDios');
    Route::get('mostrarHumanosVivos',[DiosController::class, 'mostrarHumanosVivos'])->middleware('midDios');
    Route::get('mostrarHumanoVivo/{id}',[DiosController::class, 'mostrarHumanoVivo'])->middleware('midDios');
    Route::put('matarUsuario',[DiosController::class, 'matarUsuario'])->middleware('midHades');
    Route::put('matarUsuariosAlAzar',[DiosController::class, 'matarUsuariosAlAzar'])->middleware('midHades');
    Route::get('mostrarMuertos',[DiosController::class, 'mostrarMuertos'])->middleware('midHades');
    Route::get('mostrarMuertosAscendiente', [DiosController::class, 'mostrarMuertosAscendiente'])->middleware('midHades');
    Route::get('mostrarMuertosDescendiente', [DiosController::class, 'mostrarMuertosDescendiente'])->middleware('midHades');

});
//Alejandro
Route::controller(RegistroController::class)->group(function (){
    Route::post('registrar', 'registrar');
    Route::get('verificar/{id}', 'verificar');

    Route::post('iniciarSesion','iniciarSesion');
    Route::post('cerrarSesion','cerrarSesion');
});
//Alejandro
Route::controller(CaracteristicasController::class)->group(function (){
    Route::get('mostrarCaracteristicas_Dios/{id_usuario}', 'mostrarCaracteristicas_Dios');
});

// Route::controller(CaracteristicasController::class)->group(function (){
//     Route::post('asignarCaracteristicas/{id}', 'asignarCaracteristicas');
// });
//Alicia
Route::resource('pruebas', PruebasController::class)->middleware('auth:sanctum', 'midCrearPruebas');

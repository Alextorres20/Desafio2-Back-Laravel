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
    Route::controller(DiosController::class)->group(function (){
        Route::post('crearUsuarios', 'crearUsuarios')->middleware('midDios');
        Route::get('mostrarHumanosVivos', 'mostrarHumanosVivos')->middleware('midDios');
        Route::get('mostrarHumanoVivo/{id}', 'mostrarHumanoVivo')->middleware('midDios');
        Route::put('matarUsuario', 'matarUsuario')->middleware('midMatarUsuarios');
        Route::put('matarUsuariosAlAzar', 'matarUsuariosAlAzar')->middleware('midMatarUsuarios');
        Route::get('obtenerHumanosDios', 'obtenerHumanosDios')->middleware('midDios');
        Route::get('obtenerHumanosPrueba/{idPrueba}', 'obtenerHumanosPrueba')->middleware('midDios');
    });

    //Alejandro y Alicia
    Route::controller(CaracteristicasController::class)->group(function (){
        Route::get('mostrarCaracteristicas_Dios/{id_usuario}', 'mostrarCaracteristicas_Dios');
        Route::get('mostrarCaracteristicasHumano/{id_usuario}', 'mostrarCaracteristicasHumano');
    });

    //Alicia
    Route::controller(PruebasController::class)->prefix('pruebas')->group(function (){
        Route::post('asignarPrueba', 'asignarPrueba')->middleware('midPruebas');
    });
    Route::resource('pruebas', PruebasController::class)->middleware('midPruebas');

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


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Resources\PruebasResource;
use App\Models\Caracteristica;
use App\Models\Pruebas\Prueba;
use App\Models\Pruebas\PruebaPuntual;


class PruebasController extends Controller
{
    function index(Request $request) {
    }

    function show(Request $request) {
    }

    function store(Request $request) {
        if ($pruebaGeneral = self::insertarPruebaGeneral($request)) {
            switch ($request->tipo) {
                case 'puntual':
                    $prueba = self::insertarPuntual($request, $pruebaGeneral);
                    break;

                case 'libre':
                    $prueba = self::insertarLibre($request, $pruebaGeneral);
                    break;

                case 'eleccion':
                    $prueba = self::insertarEleccion($request, $pruebaGeneral);
                    break;

                case 'valoracion':
                    $prueba = self::insertarValoracion($request, $pruebaGeneral);
                    break;
            }
            if ($prueba) return response()->json(['estado' => 'ok', 'respuesta' => $prueba], 200);
        }
        return response()->json(['estado' => 'error'], 400);
    }


    function insertarPruebaGeneral($request) {
        $datos = [
            'id_dios' => 1,
            'cantidad_destino' => $request->destino,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
        return new PruebasResource(Prueba::create($datos));
    }


    function insertarPuntual($request, $prueba) {
        $datos = [
            'id' => $prueba->id,
            'descripcion' => $request->descripcion,
            'id_caracteristica' => Caracteristica::where('nombre', $request->atributo)->value('id'),
            'dificultad' => $request->dificultad
        ];
        return new PruebasResource(PruebaPuntual::create($datos));
    }


    function insertarLibre($request) {
        return response()->json(['datos' => $request], 200);
    }


    function insertarEleccion($request) {
        return response()->json(['datos' => $request], 200);
    }


    function insertarValoracion($request) {
        return response()->json(['datos' => $request], 200);
    }
}

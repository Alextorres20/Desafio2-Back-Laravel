<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Resources\PruebaResource;
use App\Http\Resources\PruebaPuntualResource;
use App\Models\Validar;
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
        $validator = Validar::validarPruebaGeneral($request->all());
        if ($validator->fails()) {
            return response()->json(['estado' => 'error', $validator->errors()], 400);
        }

        if ($pruebaGeneral = self::insertarGeneral($request)) {
            switch ($request->tipo) {
                case 'puntual':
                    $validator = Validar::validarPruebaPuntual($request->all());
                    if ($validator->fails()) {
                        return response()->json(['estado' => 'error', $validator->errors()], 400);
                    } else {
                        $prueba = self::insertarPuntual($request, $pruebaGeneral);
                    }
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
        }
        return response()->json(['estado' => 'ok', 'respuesta' => $prueba], 200);
    }


    private function insertarGeneral($request) {
        $datos = [
            'id_dios' => 1,
            'cantidad_destino' => $request->destino,
            'created_at' => Carbon::now()
        ];
        return Prueba::create($datos);
    }


    private function insertarPuntual($request, $prueba) {
        $datos = [
            'id' => $prueba->id,
            'descripcion' => $request->descripcion,
            'id_caracteristica' => Caracteristica::where('nombre', $request->atributo)->value('id'),
            'dificultad' => $request->dificultad
        ];

        return new PruebaPuntualResource(PruebaPuntual::create($datos));
    }


    private function insertarLibre($request) {
        return response()->json(['datos' => $request], 200);
    }


    private function insertarEleccion($request) {
        return response()->json(['datos' => $request], 200);
    }


    private function insertarValoracion($request) {
        return response()->json(['datos' => $request], 200);
    }
}

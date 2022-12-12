<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Resources\PruebaResource;
use App\Http\Resources\PruebaPuntualResource;
use App\Http\Resources\PruebaRespuestaLibreResource;
use App\Models\Validar;
use App\Models\PruebaHumano;
use App\Models\Caracteristica;
use App\Models\Pruebas\Prueba;
use App\Models\Pruebas\PruebaPuntual;
use App\Models\Pruebas\PruebaOraculo;
use App\Models\Pruebas\PruebaOraculoLibre;


class PruebasController extends Controller
{
    // Todo Alicia
    function index(Request $request) {
        $puntuales = json_decode(json_encode(PruebaPuntualResource::collection(PruebaPuntual::all())), true);
        $respLibre = json_decode(json_encode(PruebaRespuestaLibreResource::collection(PruebaOraculoLibre::all())), true);
        $datos = array_merge($puntuales, $respLibre);

        return response()->json([ 'estado' => 'ok', 'respuesta' => $datos ], 200);
    }


   /*  function show(Request $request) {

    }
 */

    function store(Request $request) {
        $respuesta = null;
        $validator = Validar::validarPruebaGeneral($request->all());
        if ($validator->fails()) {
            return response()->json(['estado' => 'error', $validator->errors()], 400);
        }

        if ($pruebaGeneral = self::insertarGeneral($request)) {
            switch ($request->tipo) {
                case 'puntual':
                    $validator = Validar::validarPruebaPuntual($request->all());
                    if ($validator->fails()) {
                        Prueba::destroy($pruebaGeneral->id);
                        return response()->json(['estado' => 'error', $validator->errors()], 400);
                    } else {
                        $respuesta = self::insertarPuntual($request, $pruebaGeneral);
                    }
                    break;

                case 'respuesta-libre':
                    $validator = Validar::validarPruebaRespuestaLibre($request->all());
                    if ($validator->fails()) {
                        Prueba::destroy($pruebaGeneral->id);
                        return response()->json(['estado' => 'error', $validator->errors()], 400);
                    } else {
                        $oraculo = self::insertarOraculo($request, $pruebaGeneral);
                        $respuesta = self::insertarRespuestaLibre($request, $oraculo);
                    }
                    break;

                case 'eleccion':
                    $respuesta = self::insertarEleccion($request, $pruebaGeneral);
                    break;

                case 'valoracion':
                    $respuesta = self::insertarValoracion($request, $pruebaGeneral);
                    break;
            }
        }
        if ($respuesta) {
            return response()->json(['estado' => 'ok', 'respuesta' => $respuesta], 200);
        } else {
            Prueba::destroy($pruebaGeneral->id);
            return response()->json(['estado' => 'error'], 400);
        }
    }


    private function insertarGeneral($request) {
        $datos = [
            'id_dios' => $request->user()->id,
            'tipo' => $request->tipo,
            'cantidad_destino' => $request->destino,
            'created_at' => Carbon::now()
        ];

        return Prueba::create($datos);
    }


    private function insertarOraculo($request, $prueba){
        $datos = [
            'id' => $prueba->id,
            'pregunta' => $request->pregunta
        ];

        return PruebaOraculo::create($datos);
    }


    private function insertarRespuestaLibre($request, $prueba) {
        if ($prueba) {
            $datos = [
                'id' => $prueba->id,
                'porcentaje' => $request->porcentaje,
                'palabras_clave' => $request->palabras_clave
            ];
        }
        return new PruebaRespuestaLibreResource(PruebaOraculoLibre::create($datos));
    }


    private function insertarEleccion($request) {
        return response()->json(['datos' => $request], 200);
    }


    private function insertarValoracion($request) {
        return response()->json(['datos' => $request], 200);
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

    /* function update(User $user, Request $request) {
        $user->update($request->all());
        return new userResource($user);
    }
 */

    function destroy(Prueba $prueba) {
        try {
            $prueba->delete();
            return response()->json(['estado' => 'ok', 'datos' => $prueba], 200);
        } catch (Exception $e) {
            return response()->json(['estado' => 'error', 'datos' => $prueba], 400);
        }
    }


    function asignarPrueba(Request $request) {
        $pruebaHumano = new PruebaHumano();
        $pruebaHumano->id_prueba = $request->idPrueba;
        $pruebaHumano->id_humano = $request->idHumano;

        try {
            $pruebaHumano->save();
            return response()->json(['estado' => 'ok'], 200);
        } catch (Exception $e) {
            return response()->json(['estado' => 'error'], 400);
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Validar extends Model
{//Alicia
    static function validarPruebaGeneral($input) {
        $messages = [
            'digits_between' => 'Debe ser un número entre 1 y 100',
            'required' => 'Campo requerido',
            'in' => 'El campo tipo debe estar entre las siguientes opciones: puntual, respuesta-libre, eleccion y valoracion'
        ];

        return Validator::make($input, [
            'tipo' => 'required | in:puntual,respuesta-libre,valoracion,eleccion',
            'destino' => 'required | digits_between:1,100'
        ], $messages);
    }


    static function validarPruebaPuntual($input) {
        $messages = [
            'digits_between' => 'Debe ser un número entre 1 y 100',
            'required' => 'Campo requerido',
            'max' => 'No puede superar los :max caracteres',
            'in' => 'El campo tipo debe estar entre las siguientes opciones: Audacia, Nobleza, Sabiduría, Maldad y Virtud'
        ];

        return Validator::make($input, [
            'atributo' => 'required | in:Audacia,Nobleza,Sabiduría,Maldad,Virtud',
            'destino' => 'required | digits_between:1,100',
            'descripcion' => 'max:255',
            'dificultad' => 'required | digits_between:1,100'
        ], $messages);
    }


    static function validarPruebaRespuestaLibre($input) {
        $messages = [
            'required' => 'Campo requerido',
            'max' => 'No puede superar los :max caracteres',
        ];

        return Validator::make($input, [
            'pregunta' => 'required | max:255',
            'palabras_clave' => 'required | max:255'
        ], $messages);
    }


    static function validarPruebaValoracion($input) {
        $messages = [
            'required' => 'Campo requerido',
            'in' => 'El campo tipo debe estar entre las siguientes opciones: Audacia, Nobleza, Sabiduría, Maldad y Virtud',
        ];

        return Validator::make($input, [
            'pregunta' => 'required | max:255',
            'atributo' => 'required | in:Audacia,Nobleza,Sabiduría,Maldad,Virtud'
        ], $messages);
    }


    static function validarPruebaEleccion($input) {
        $messages = [
            'digits_between' => 'Debe ser un número entre 1 y 5',
            'required' => 'Campo requerido',
            'max' => 'No puede superar los :max caracteres',
            'in' => 'El campo tipo debe estar entre las siguientes opciones: Audacia, Nobleza, Sabiduría, Maldad y Virtud'
        ];

        return Validator::make($input, [
            'pregunta' => 'required | max:255',
            'respuesta_correcta' => 'required | max:255',
            'respuesta_incorrecta' => 'required | max:255',
            'atributo' => 'required | in:Audacia,Nobleza,Sabiduría,Maldad,Virtud',
            'valor_atributo' => 'required | digits_between:1,5',
        ], $messages);
    }
}

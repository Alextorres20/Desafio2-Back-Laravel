<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaracteristicaUsuario;
class CaracteristicasController extends Controller
{
    // Alejandro
    public function asignarCaracteristicas($id, $id_caracteristica){


        try {
            $carac_user = new CaracteristicaUsuario;
            $carac_user->id_usuario = $id;
            $carac_user->id_caracteristica = $id_caracteristica;
            $carac_user->valor = rand(1,5);
            $carac_user->save();
            $mensaje = $carac_user;
        } catch (\Exception $e) {
            $mensaje = 'Clave duplicada o algo malo ha salido';
        }
        return $mensaje;
    }
}

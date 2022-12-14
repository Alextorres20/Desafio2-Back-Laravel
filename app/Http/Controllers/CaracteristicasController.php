<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaracteristicaUsuario;
use App\Models\Caracteristica;
use App\Models\DiosHumano;
use App\Models\User;


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

    public function mostrarCaracteristicas_Dios ($id_usuario){
        $humano_caracteristicas = CaracteristicaUsuario::where('id_usuario', $id_usuario)->get();
        $humano_dios = DiosHumano::where('id_humano', $id_usuario)->first();
        $dios = User::where('id', $humano_dios->id_dios)->first();
        return response()->json(['caracteristicas' => $humano_caracteristicas,
        'protegido_por' => $dios->name], 200);
    }


    public function mostrarCaracteristicasUsuario ($id_usuario){
        $datos = CaracteristicaUsuario::with('caracteristica')->where('id_usuario', $id_usuario)->get();
        $caracteristicas = [];
        foreach ($datos as $value) {
            array_push($caracteristicas, ['nombre' => $value->caracteristica->nombre, 'valor' => $value->valor]);
        }
        return response()->json($caracteristicas, 200);
    }

}

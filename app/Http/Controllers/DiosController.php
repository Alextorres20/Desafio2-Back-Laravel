<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaracteristicaUsuario;
use App\Models\DiosHumano;
class DiosController extends Controller
{
    //

    public function asignarProteccion($id_usuario){
        $Zeus_Caracteristicas = CaracteristicaUsuario::where('id_usuario', '16')->get();
        $Poseidon_Caracteristicas = CaracteristicaUsuario::where('id_usuario', '17')->get();
        $Hades_Caracteristicas = CaracteristicaUsuario::where('id_usuario', '18')->get();
        $usuario = CaracteristicaUsuario::where('id_usuario', $id_usuario)->get();

        // Este algoritmo calculara de forma "competitiva" entre los tres dioses quien tiene mas puntos
        // El dios que tenga más puntos se quedara con el humano

        $puntos_Zeus = [];
        $puntos_Poseidon = [];
        $puntos_Hades = [];
        $puntos_aux = 1;

        for ($i=0; $i < 5; $i++) {
            if($Zeus_Caracteristicas[$i]->valor == $usuario[$i]->valor){
                array_push($puntos_Zeus, $puntos_aux);
            }
            else{
                if($Zeus_Caracteristicas[$i]->valor > $usuario[$i]->valor){
                    for($u = $usuario[$i]->valor; $u < $Zeus_Caracteristicas[$i]->valor; $u++){
                        $puntos_aux = $puntos_aux - 0.2;
                        if($u + 1 == $Zeus_Caracteristicas[$i]->valor){
                            array_push($puntos_Zeus, $puntos_aux);
                        }
                    }
                    $puntos_aux = 1;
                }
                else{
                    for($u = $usuario[$i]->valor; $u > $Zeus_Caracteristicas[$i]->valor; $u--){
                        $puntos_aux = $puntos_aux - 0.2;
                        if($u - 1 == $Zeus_Caracteristicas[$i]->valor){
                            array_push($puntos_Zeus, $puntos_aux);
                        }
                    }
                    $puntos_aux = 1;
                }
            }
            if($Poseidon_Caracteristicas[$i]->valor == $usuario[$i]->valor){
                array_push($puntos_Poseidon, $puntos_aux);
            }
            else{
                if($Poseidon_Caracteristicas[$i]->valor > $usuario[$i]->valor){
                    for($u = $usuario[$i]->valor; $u < $Poseidon_Caracteristicas[$i]->valor; $u++){
                        $puntos_aux = $puntos_aux - 0.2;
                        if($u + 1 == $Poseidon_Caracteristicas[$i]->valor){
                            array_push($puntos_Poseidon, $puntos_aux);
                        }
                    }
                    $puntos_aux = 1;
                }
                else{
                    for($u = $usuario[$i]->valor; $u > $Poseidon_Caracteristicas[$i]->valor; $u--){
                        $puntos_aux = $puntos_aux - 0.2;
                        if($u - 1 == $Poseidon_Caracteristicas[$i]->valor){
                            array_push($puntos_Poseidon, $puntos_aux);
                        }
                    }
                    $puntos_aux = 1;
                }
            }
            if($Hades_Caracteristicas[$i]->valor == $usuario[$i]->valor){
                array_push($puntos_Hades, $puntos_aux);
            }
            else{
                if($Hades_Caracteristicas[$i]->valor > $usuario[$i]->valor){
                    for($u = $usuario[$i]->valor; $u < $Hades_Caracteristicas[$i]->valor; $u++){
                        $puntos_aux = $puntos_aux - 0.2;
                        if($u + 1 == $Hades_Caracteristicas[$i]->valor){
                            array_push($puntos_Hades, $puntos_aux);
                        }
                    }
                    $puntos_aux = 1;
                }
                else{
                    for($u = $usuario[$i]->valor; $u > $Hades_Caracteristicas[$i]->valor; $u--){
                        $puntos_aux = $puntos_aux - 0.2;
                        if($u - 1 == $Hades_Caracteristicas[$i]->valor){
                            array_push($puntos_Hades, $puntos_aux);
                        }

                    }
                    $puntos_aux = 1;
                }
            }
        }
        $zeusTotal = 0;
        $poseidonTotal = 0;
        $hadesTotal = 0;
        for ($i=0; $i < 5; $i++) {
            if($puntos_Zeus[$i] > $puntos_Poseidon[$i] && $puntos_Zeus[$i] > $puntos_Hades[$i]){
                $zeusTotal++;
            }
            if($puntos_Poseidon[$i] > $puntos_Zeus[$i] && $puntos_Poseidon[$i] > $puntos_Hades[$i]){
                $poseidonTotal++;
            }
            if($puntos_Hades[$i] > $puntos_Zeus[$i] && $puntos_Hades[$i] > $puntos_Poseidon[$i]){
                $hadesTotal++;
            }
        }
        $alea;
        $dioshumano = new DiosHumano;
        if($zeusTotal == $poseidonTotal || $zeusTotal == $hadesTotal || $poseidonTotal == $hadesTotal){
            if($zeusTotal == $poseidonTotal){
                if($zeusTotal == $hadesTotal){
                    $alea = rand(1,3);
                    if($alea == 1){
                        $dioshumano->id_dios = $Zeus_Caracteristicas->first()->id_usuario;
                    }
                    if($alea == 2){
                        $dioshumano->id_dios = $Poseidon_Caracteristicas->first()->id_usuario;
                    }
                    if($alea == 3){
                        $dioshumano->id_dios = $Hades_Caracteristicas->first()->id_usuario;
                    }
                }
                else{
                    $alea = rand(1,2);
                    if($alea == 1){
                        $dioshumano->id_dios = $Zeus_Caracteristicas->first()->id_usuario;
                    }
                    if($alea == 2){
                        $dioshumano->id_dios = $Poseidon_Caracteristicas->first()->id_usuario;
                    }
                }
            }
            else{
                if($poseidonTotal == $hadesTotal){
                    $alea = rand(1,2);
                    if($alea == 1){
                        $dioshumano->id_dios = $Poseidon_Caracteristicas->first()->id_usuario;
                    }
                    else{
                        $dioshumano->id_dios = $Hades_Caracteristicas->first()->id_usuario;
                    }
                }
                else{
                    if($hadesTotal == $zeusTotal){
                        $alea = rand(1,2);
                        if($alea == 1){
                            $dioshumano->id_dios = $Hades_Caracteristicas->first()->id_usuario;
                        }
                        else{
                            $dioshumano->id_dios = $Zeus_Caracteristicas->first()->id_usuario;
                        }
                    }
                }
            }
        }else{
            if($zeusTotal > $poseidonTotal && $zeusTotal > $hadesTotal){
                $dioshumano->id_dios = $Zeus_Caracteristicas->first()->id_usuario;
            }
            if($poseidonTotal > $zeusTotal && $poseidonTotal > $hadesTotal){
                $dioshumano->id_dios = $Poseidon_Caracteristicas->first()->id_usuario;
            }
            if($hadesTotal > $zeusTotal && $hadesTotal > $poseidonTotal){
                $dioshumano->id_dios = $Hades_Caracteristicas->first()->id_usuario;
            }
        }

        $dioshumano->id_humano = $id_usuario;
        $dioshumano->save();

        return $dioshumano;

    }
}

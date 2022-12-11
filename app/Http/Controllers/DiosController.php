<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CaracteristicasController;
use App\Models\Caracteristica;
use App\Models\CaracteristicaUsuario;
use App\Models\DiosHumano;
use App\Models\Humano;
use App\Models\Rol;
use App\Models\RolUsuario;
use App\Models\User;
use App\Models\Parametro;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Faker;

class DiosController extends Controller
{
    // Alejandro
    public function asignarProteccion($id_usuario){
        $zeus_ID = User::where('name', 'Zeus')->first()->id;
        $poseidon_ID = User::where('name', 'Poseidon')->first()->id;
        $hades_ID = User::where('name', 'Hades')->first()->id;

        $Zeus_Caracteristicas = CaracteristicaUsuario::where('id_usuario', $zeus_ID)->get();
        $Poseidon_Caracteristicas = CaracteristicaUsuario::where('id_usuario', $poseidon_ID)->get();
        $Hades_Caracteristicas = CaracteristicaUsuario::where('id_usuario', $hades_ID)->get();
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

    // Alejandro
    public function crearUsuarios(Request $req){
        $auth = Auth::user();
        $faker = Faker\Factory::create();
        $cantidad = $req->get('cantidad');
        $usuarios_creados = [];
        for($i = 1; $i <= $cantidad; $i++){
            $usuario = new User;
            $usuario->name = $faker->name();
            $usuario->password = bcrypt('1234');
            $usuario->email = $faker->unique()->safeEmail();
            $usuario->email_verified_at = Carbon::now()->toDateTimeString();
            $usuario->remember_token = Str::random(10);
            $usuario->save();
            $caracteristicas_user = [];
            for ($u=1; $u <= 5 ; $u++) {
                $id_Caracteristica = Caracteristica::where('id', $u)->first()->id;
                array_push($caracteristicas_user, CaracteristicasController::asignarCaracteristicas($usuario->id, $id_Caracteristica));
            }
            $dios_humano = new DiosHumano;
            $dios_humano->id_dios =  $auth->id;
            $dios_humano->id_humano = $usuario->id;
            $dios_humano->save();
            array_push($usuarios_creados, $usuario);

            $humano = new Humano;
            $humano->id_usuario = $usuario->id;
            $humano->destino = 0;
            $humano->donde_murio = 'Vivo';
            $humano->save();

            $rolUsuario = new RolUsuario;
            $rolUsuario->id_usuario = $usuario->id;
            $rolUsuario->id_rol = Rol::where('Nombre', 'Humano')->first()->id;
            $rolUsuario->save();
        }
        return response()->json(['Dios' => $auth->name,
        'Cantidad de usuarios ' => $cantidad,
        'Usuarios' => $usuarios_creados],201);
    }

    // Alejandro
    public function mostrarHumanoVivo($id){
        $humanoVivo = Humano::where('id_usuario', $id)->where('donde_murio', 'Vivo')->first();
        return response()->json($humanoVivo);
    }

    // Alejandro
    public function mostrarHumanosVivos(){
        $usuariosVivos = Humano::where('donde_murio', 'Vivo')->get();
        return response()->json($usuariosVivos);
    }

    // Alejandro
    public function obtenerHumanosVivos(){
        $usuariosVivos = Humano::where('donde_murio', 'Vivo')->get();
        return $usuariosVivos;
    }

    // Alejandro
    public function matarUsuario(Request $req){

        $humano = Humano::where('id_usuario', $req->get('id_usuario'))->where('donde_murio', 'Vivo')->first();
        $exigir = Parametro::where('nombre', 'Exigir')->first();
        if($humano->destino >= $exigir->valor){
            $humano::where('id_usuario', $humano->id_usuario)->update(['donde_murio' => "Campo de Eliseos"]);
            $mensaje = ['El humano ha muerto, pero al menos esta en el campo de Eliseos'];
        }
        else{
            $humano::where('id_usuario', $humano->id_usuario)->update(['donde_murio' => "Tartaros"]);
            $mensaje = ['Que los dioses tengan piedad de esta pobre alma, el humano ha ido a Tartaros'];
        }

        return response()->json(['mens' => $mensaje], 201);
    }

    // Alejandro
    public function matarUsuariosAlAzar(){
        $humanosVivos = self::obtenerHumanosVivos();
        $aleatorio = rand(1, count($humanosVivos));
        $exigir = Parametro::where('nombre', 'Exigir')->first();
        $campoEliseos = [];
        $tartaros = [];
        for ($i=0; $i < $aleatorio; $i++) {
            if($humanosVivos[$i]->destino >= $exigir->valor){
                $humanosVivos[$i]::where('id_usuario', $humanosVivos[$i]->id_usuario)
                ->update(['donde_murio' => "Campo de Eliseos"]);
                array_push($campoEliseos, $humanosVivos[$i]);
            }
            else{
                $humanosVivos[$i]::where('id_usuario', $humanosVivos[$i]->id_usuario)
                ->update(['donde_murio' => "Tartaros"]);
                array_push($tartaros, $humanosVivos[$i]);
            }
        }

        return response()->json(['Humanos que han ido a Campo Eliseos' => count($campoEliseos),
        'Humanos que han ido a Tartaros' => count($tartaros)]);
    }


    //Alicia
    public function obtenerHumanosDios(Request $request) {
        $idsHumanos = DiosHumano::where('id_dios', $request->user()->id)->get('id_humano');
        $humanos = Humano::with('user')
            ->whereIn('id_usuario', $idsHumanos)
            ->where('donde_murio', 'Vivo')->get();
        return response()->json($humanos);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CaracteristicasController;
use App\Http\Controllers\DiosController;
use App\Models\User;
use App\Models\Humano;
use App\Models\DiosHumano;
use App\Models\Caracteristica;
use App\Models\CaracteristicaUsuario;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Str;

class RegistroController extends Controller
{
    // Todo Alejandro
    public function iniciarSesion(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $auth = Auth::user();
            //$success['token'] =  $auth->createToken('access_token',["delete","read"])->plainTextToken;
            if(str_contains($auth->email, 'zeus') || str_contains($auth->email, 'poseidon') || str_contains($auth->email, 'hades')){
                if(str_contains($auth->name, 'Hades')){
                    $success['token'] =  $auth->createToken('access_token',["dios", "hades"])->plainTextToken;
                }
                else{
                    $success['token'] =  $auth->createToken('access_token',["dios"])->plainTextToken;
                }
            }
            else{
                $success['token'] =  $auth->createToken('access_token',["humano"])->plainTextToken;
            }
            $success['name'] =  $auth->name;
            return response()->json(["success"=>true,"data"=>$success, "message" => "Logged in!"],200);
        }
        else{
            return response()->json(["success"=>false, "message" => "Unauthorised"],202);
        }
    }


    public function registrar(Request $request)
    {
        $messages = [
            'email' => 'El campo no se ajusta a n correo estándar',
            'same' => 'Los campos :password y :confirm_password deben coincidir.',
            'max' => 'El campo se excede del tamaño máximo :max',
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ], $messages);

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);  //También vale: Hash::make($request->password)
        $user = User::create($input);
        $success['token']  = $user->createToken('registrado', ["humano"])->plainTextToken;
        $success['name'] =  $user->name;
        $email = $user->email;

        $datos = [
            'nombre' => $user->name,
            'email' => $user->email,
            'id' => $user->id
        ];

        try{
            Mail::send('welcome', $datos, function($message) use ($email){
                $message->to($email)->subject('Verificacion de usuario Desafio 2');
                $message->from('AuxiliarDAW2@gmail.com', 'Esto es un ejemplo de envío de correo electronico desde Laravel automatico');
            });
            $mensaje = ["success"=>true,"data"=>$success, "message" => "User successfully registered!"];
        } catch (Expection $e) {
            $mensaje = 'Clave duplicada o algo ha salido mal';
        }

        return response()->json(['mens' => $mensaje], 201);
    }

    public function verificar($id, Request $re){
        $usuarioVerificado = User::where('id', $id)
        ->update(['email_verified_at' => Carbon::now()->toDateTimeString(),
        'remember_token' => Str::random(10)]);
        $caracteristicas_user = [];

        for ($i=1; $i <= 5 ; $i++) {
            $id_Caracteristica = Caracteristica::where('id', $i)->first()->id;
            array_push($caracteristicas_user, CaracteristicasController::asignarCaracteristicas($id, $id_Caracteristica));
        }
        $dios_humano = DiosController::asignarProteccion($id);

        $humano = new Humano;
        $humano->id_usuario = $id;
        $humano->destino = 0;
        $humano->donde_murio = null;
        $humano->save();



        return response()->json(['Usuario Verificado ' => $usuarioVerificado,
        'Caracteristicas' => $caracteristicas_user,
        'DiosHumano' => $dios_humano],
        200);
    }

    public function cerrarSesion(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $cantidad = Auth::user()->tokens()->delete();
            return response()->json(["success"=>$cantidad, "message" => "Tokens Revoked"],200);
        }
        else {
            return response()->json("Unauthorised",204);
        }

    }
}

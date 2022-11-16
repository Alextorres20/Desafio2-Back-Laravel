<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaracteristicaUsuario extends Model
{
    use HasFactory;

    protected $table = 'caracteristicas_usuarios'; //Por defecto tomaría la tabla 'personas'.
    protected $primaryKey = ['id_usuario', 'id_caracteristica'];  //Por defecto el campo clave es 'id', entero y autonumérico.
    public $incrementing = false; //Para indicarle que la clave no es autoincremental.

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiosHumano extends Model
{
    use HasFactory;

    protected $table = 'dioses_humanos'; //Por defecto tomaría la tabla 'personas'.
    protected $primaryKey = ['id_dios', 'id_humano'];  //Por defecto el campo clave es 'id', entero y autonumérico.
    public $incrementing = false; //Para indicarle que la clave no es autoincremental.
}

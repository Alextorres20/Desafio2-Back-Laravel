<?php

namespace App\Models\Pruebas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{//Alicia
    use HasFactory;

    protected $fillable = [
        'id_dios',
        'cantidad_destino'
    ];


}

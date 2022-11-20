<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaracteristicaUsuario extends Model
{
    use HasFactory;

    protected $table = 'caracteristicas_usuarios';
    protected $primaryKey = ['id_usuario', 'id_caracteristica'];
    public $incrementing = false;

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaracteristicaUsuario extends Model
{//Alicia y Alejandro
    use HasFactory;

    protected $table = 'caracteristicas_usuarios';
    protected $primaryKey = ['id_usuario', 'id_caracteristica'];
    public $incrementing = false;


    public function caracteristica() {
        return $this->hasOne(Caracteristica::class, 'id', 'id_caracteristica');
    }
}

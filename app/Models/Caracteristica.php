<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CaracteristicaUsuario;

class Caracteristica extends Model
{//Alicia y Alejandro
    use HasFactory;

    public function user() {
        return $this->hasOne(CaracteristicaUsuario::class, 'id', 'id_caracteristica');
    }
}

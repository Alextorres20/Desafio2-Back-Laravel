<?php

namespace App\Models\Pruebas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pruebas\Prueba;

class PruebaPuntual extends Model
{//Alicia
    use HasFactory;

    protected $table = 'pruebas_puntuales';
    public $incrementing = false;
    public $timestamps = false;


    protected $fillable = [
        'id',
        'descripcion',
        'id_caracteristica',
        'dificultad'
    ];

    public function prueba()
    {
        return $this->hasOne(Prueba::class, 'id', 'id');
    }
}

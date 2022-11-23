<?php

namespace App\Models\Pruebas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PruebaPuntual extends Model
{
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
}

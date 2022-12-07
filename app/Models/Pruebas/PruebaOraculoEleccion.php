<?php

namespace App\Models\Pruebas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PruebaOraculoEleccion extends Prueba
{//Alicia
    use HasFactory;

    protected $table = 'pruebas_oraculo_eleccion';
    public $incrementing = false;
    public $timestamps = false;
}

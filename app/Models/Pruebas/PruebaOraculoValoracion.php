<?php

namespace App\Models\Pruebas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PruebaOraculoValoracion extends Model
{//Alicia
    use HasFactory;

    protected $table = 'pruebas_oraculo_valoracion';
    public $incrementing = false;
    public $timestamps = false;
}

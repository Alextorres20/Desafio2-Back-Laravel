<?php

namespace App\Models\Pruebas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PruebaOraculoLibre extends Prueba
{//Alicia
    use HasFactory;

    protected $table = 'pruebas_oraculo_libre';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'porcentaje',
        'palabras_clave'
    ];

    public function prueba()
    {
        return $this->hasOne(Prueba::class, 'id', 'id');
    }

    public function oraculo()
    {
        return $this->hasOne(PruebaOraculo::class, 'id', 'id');
    }
}

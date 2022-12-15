<?php

namespace App\Models\Pruebas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PruebaOraculoValoracion extends Prueba
{//Alicia
    use HasFactory;

    protected $table = 'pruebas_oraculo_valoracion';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_caracteristica'
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

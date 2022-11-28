<?php

namespace App\Models\Pruebas;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PruebaOraculo extends Model
{
    use HasFactory;

    protected $table = 'pruebas_oraculo';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'tipo',
        'pregunta'
    ];
}

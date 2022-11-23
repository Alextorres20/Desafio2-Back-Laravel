<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PruebaOraculoValoracion extends Model
{
    use HasFactory;

    protected $table = 'pruebas_oraculo_valoracion';
    public $incrementing = false;
    public $timestamps = false;
}

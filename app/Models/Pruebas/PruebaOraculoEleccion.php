<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PruebaOraculoEleccion extends Model
{
    use HasFactory;

    protected $table = 'pruebas_oraculo_eleccion';
    public $incrementing = false;
    public $timestamps = false;
}

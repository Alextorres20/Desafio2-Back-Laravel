<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PruebaHumano extends Model
{//Alicia y Alejandro
    use HasFactory;

    protected $table = 'pruebas_humanos';
    protected $primaryKey = ['id_prueba', 'id_humano'];
    public $incrementing = false;
    public $timestamps = false;
}

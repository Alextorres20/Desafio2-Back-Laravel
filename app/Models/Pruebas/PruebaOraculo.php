<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PruebaOraculo extends Model
{
    use HasFactory;

    protected $table = 'pruebas_oraculo';
    public $incrementing = false;
    public $timestamps = false;
}

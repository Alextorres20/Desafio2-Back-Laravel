<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Humano extends Model
{
    use HasFactory;

    public $incrementing = false; //Para indicarle que la clave no es autoincremental.

}

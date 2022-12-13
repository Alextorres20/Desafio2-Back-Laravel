<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Humano extends Model
{//Alicia y Alejandro
    use HasFactory;

    public $incrementing = false;
    public $timestamps = false;

    public function user() {
        return $this->hasOne(User::class, 'id', 'id_usuario');
    }
}

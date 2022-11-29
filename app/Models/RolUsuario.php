<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolUsuario extends Model
{
    use HasFactory;

    protected $table = 'roles_usuarios';
    protected $primaryKey = ['id_usuario', 'id_rol'];
    public $incrementing = false;
    public $timestamps = false;
}

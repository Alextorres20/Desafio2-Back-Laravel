<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiosHumano extends Model
{
    use HasFactory;

    protected $table = 'dioses_humanos';
    protected $primaryKey = ['id_dios', 'id_humano'];
    public $incrementing = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportista extends Model
{
    protected $table = 'transportista'; // define el nombre de la tabla

    use HasFactory;

    protected $fillable = ['codigo', 'descripcion', 'empresa_id','usuario_id'];

}

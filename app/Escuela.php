<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $fillable = [
        'id',
        'razon_social', 
        'nombre_escuela', 
        'tipo_escuela_id',
        'nombre',
        'apellido',
        'direccion',
        'codigo_postal',
        'provincia',
        'pais',
        'telefono'
    ];
}
